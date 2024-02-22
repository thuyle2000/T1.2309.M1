--1. Tao CSDL
CREATE DATABASE dbPretest
ON PRIMARY
(
 name='dbPretest', size=16, filegrowth=100, maxsize=unlimited, 
 filename='F:\data\dbPretest.mdf'
)
LOG ON
(
 name='dbPretest_log', size=16, filegrowth=10%, maxsize=300, 
 filename='F:\data\dbPretest_log.ldf'
)
GO

-- open CSDL 
use dbPretest
go


--2a. tao bang phong [tbRoom]
CREATE TABLE [tbRoom](
	RoomNo int not null,
	[type] varchar(20) not null 
		   CHECK([type] IN ('VIP','DOUBLE','SINGLE')),
	unit_price money not null 
	       CHECK (unit_price BETWEEN 0 AND 1000),
	CONSTRAINT roomPK PRIMARY KEY NONCLUSTERED (RoomNo) 
)
go


--2b. Tao bang Booking
CREATE TABLE tbBooking (
	BookingNo int not null,
	RoomNo int not null,
	TouristName varchar(30) not null,
	DateFrom Date,
	DateTo Date, 
	CONSTRAINT dateCK CHECK(DateFrom <=DateTo ),
	CONSTRAINT bookingPK PRIMARY KEY NONCLUSTERED (BookingNo,RoomNo),
	CONSTRAINT roomFK FOREIGN KEY (RoomNo) REFERENCES [tbRoom](RoomNo) 
)
go

--2c. Chen du lieu vo bang room va booking
INSERT tbRoom VALUES
(101, 'Single', 100),
(102, 'Single', 100),
(103, 'Double', 250),
(201, 'Double', 250),
(202, 'Double', 300),
(203, 'Single', 150),
(301, 'VIP', 900)
GO

SET DATEFORMAT dmy
INSERT tbBooking VALUES
(1, 101, 'Julia', '12/11/2020', '14/11/2020'),
(1, 103, 'Julia', '12/12/2020', '13/12/2020'),
(2, 301, 'Bill', '10/01/2021', '14/01/2021'),
(3, 201, 'Ana', '12/01/2021' ,'14/01/2021'),
(3, 202, 'Ana', '12/01/2021', '14/01/2021')
GO

SELECT * FROM tbRoom
SELECT * FROM tbBooking
GO

-- 3. Create a clustered index ixName on column TouristName of table tbBooking
CREATE CLUSTERED INDEX [ixName] ON tbBooking(TouristName)
GO

-- 4. Create a non-clustered index [ixType] on column [Type] of table [tbRoom]
CREATE INDEX [ixType] ON tbRoom([Type])
GO

/*
5. Create a view [vwBooking] to see the information about bookings in year 2020 which contain the following columns:
	BookingNo, TouristName, RoomNo,Type, UnitPrice, DateFrom, DateTo. 
  The definition of view must be encrypted.
*/
CREATE VIEW [vwBooking] WITH ENCRYPTION
    AS
	SELECT b.BookingNo, b.TouristName, r.RoomNo, r.type, r.unit_price, 
		   b.DateFrom, b.DateTo
	FROM tbBooking [b] JOIN tbRoom [r] ON b.RoomNo=r.RoomNo
	WHERE YEAR(b.DateFrom) = 2020
GO

-- truy van ds dat phong nam 2020
SELECT * FROM vwBooking

-- kiem tra noi dung cua view 
sp_helptext vwBooking
GO

/*
  6. Create a stored procedure name [uspPriceDecrease] will down the unit price  of double rooms a given amount (input parameter).
     If non value given, display a list of rooms, sorted by price .
*/

CREATE PROC [uspPriceDecrease]
	@amount INT = NULL
AS
BEGIN
	IF(@amount IS NULL)
	BEGIN
		SELECT * FROM tbRoom ORDER BY unit_price
	END
	ELSE
	BEGIN
		SELECT * FROM tbRoom WHERE [type] LIKE 'DOUBLE'
		BEGIN TRY
			UPDATE tbRoom SET unit_price -= @amount 
			              WHERE [type] LIKE 'DOUBLE'
		END TRY
		BEGIN CATCH
			Print 'LOI: Gia phong cap nhat ko hop le. Tu choi thao tac !'
		END CATCH
		SELECT * FROM tbRoom WHERE [type] LIKE 'DOUBLE'
 	END
END
Go

-- Test case 1:
EXEC uspPriceDecrease 

-- Test case 2: giam gia tien phong double 20$
EXEC uspPriceDecrease 20

-- Test case 3: giam gia tien phong double 300$
EXEC uspPriceDecrease 300
Go

/*
7. Create a stored procedure name [uspSpecificPriceIncrease] :
   - increment the unit price of a given room (input parameter) by a given amount (input parameter) 
   - return the number of rooms (output parameter) which have room rate above 250.
*/
CREATE PROCEDURE [uspSpecificPriceIncrease]
	@room_no INT ,
	@amount INT ,
	@count INT OUTPUT
AS
BEGIN
	SELECT * FROM tbRoom WHERE RoomNo = @room_no

	BEGIN TRY
			UPDATE tbRoom SET unit_price += @amount 
			              WHERE RoomNo = @room_no
	END TRY
	BEGIN CATCH
			Print 'LOI: Tang Gia phong ko hop le. Tu choi thao tac !'
	END CATCH

	SELECT * FROM tbRoom WHERE RoomNo = @room_no

	-- dem cac phong co gia tren 250
	SELECT * FROM tbRoom WHERE unit_price >=250	
	SET @count = @@ROWCOUNT

END		
GO

-- Test Case 1:
DECLARE @phong250 INT
EXEC uspSpecificPriceIncrease 103, 100, @phong250 OUTPUT
SELECT @phong250 [tong so phong co gia tren 250$]
GO

-- Test Case 2:
DECLARE @phong250 INT
EXEC uspSpecificPriceIncrease 101,50, @phong250 OUTPUT
SELECT @phong250 [tong so phong co gia tren 250$]
GO

-- Test Case 3:
DECLARE @phong250 INT
EXEC uspSpecificPriceIncrease 301,900, @phong250 OUTPUT
SELECT @phong250 [tong so phong co gia tren 250$]
GO

/*
8. Create a trigger named [tgBookingRoom] that allows one booking order having 3 rooms maximum. 
*/

CREATE TRIGGER [tgBookingRoom] ON tbBooking
	AFTER INSERT
AS
BEGIN
	-- dem so phong dang ky trong 1 booking order
	SELECT BookingNo, COUNT(*) [so phong] FROM tbBooking 
				WHERE BookingNo IN (SELECT BookingNo FROM inserted)
				GROUP BY BookingNo HAVING COUNT(*) > 3

	IF EXISTS ( SELECT BookingNo, COUNT(*) [so phong] FROM tbBooking 
				WHERE BookingNo IN (SELECT BookingNo FROM inserted)
				GROUP BY BookingNo HAVING COUNT(*) > 3 )
	BEGIN
		print 'LOI: Mot booking order ko the co nhieu hon 3 phong! Tu choi thao tac !'
		ROLLBACK
	END
END
GO

select * from tbBooking
-- TEST CASE 1: thanh cong !
INSERT tbBooking VALUES (1, 102,'Long', '2020-12-12', '2020-12-14')

-- TEST CASE 2: that bai !
INSERT tbBooking VALUES (1, 301,'Tuan', '2020-12-12', '2020-12-14')
GO

/*
9. Create a trigger named [tgRoomUpdate] that doing the following (using try-catch structure) : 
If new price is equal to 0 and this room has not existed in tbBooking, then remove it from tbRoom table
else display an error message and roll back transaction.
*/

CREATE TRIGGER [tgRoomUpdate] ON tbRoom
	AFTER UPDATE
AS
BEGIN
	IF EXISTS (SELECT RoomNo FROM inserted WHERE unit_price = 0)
	BEGIN
		IF EXISTS (SELECT * FROM tbBooking 
					WHERE RoomNo IN 
						(SELECT RoomNo FROM inserted 
									   WHERE unit_price = 0 )
				   )
		BEGIN
			print 'LOI: ko the set gia co zero cho phong da duoc booking ! Tu choi thao tac !'
			ROLLBACK
		END
		ELSE BEGIN
			DELETE FROM tbRoom 
					WHERE RoomNo IN (SELECT RoomNo FROM inserted 
											WHERE unit_price = 0 )
		END

	END
END
GO


-- TEST CASE 1: cap nhat gia phong 101 -> 100 usd
SELECT * from tbRoom WHERE RoomNo = 101
UPDATE tbRoom SET unit_price = 100 WHERE RoomNo = 101
SELECT * from tbRoom WHERE RoomNo = 101


select * from tbBooking

-- TEST CASE 2: cap nhat gia phong 101 -> 0 usd : LOI !!!
SELECT * from tbRoom WHERE RoomNo = 101
UPDATE tbRoom SET unit_price = 0 WHERE RoomNo = 101
SELECT * from tbRoom WHERE RoomNo = 101

-- TEST CASE 3: cap nhat gia phong 203 -> 0 usd : XOA PHONG 203 !!!
SELECT * from tbRoom WHERE RoomNo = 203
UPDATE tbRoom SET unit_price = 0 WHERE RoomNo = 203
SELECT * from tbRoom WHERE RoomNo = 203
GO
