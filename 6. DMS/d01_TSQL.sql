-- thu nghiem lenh T-SQL
-- 1. cac ham thoi gian
--- lay ngay hien tai
select GETDATE()
select GETDATE() as 'Ngay hom nay'
select GETDATE() as 'Ngày hôm nay'
go

-- tinh khoang cach giua 2 ngay bat ky
-- xem con bao nhieu ngay nua la tet am lich
declare @tet Date = '20240210'; -- tet la ngay 10/02/2024,
select DATEDIFF(d,GETDATE(), @tet) as 'ngày'
go

-- tinh tuoi cua ban sinh vien
declare @dob Date ='20020119' ; -- tuong duong 19/01/2002
declare @tuoi int = DATEDIFF(yy,@dob, GETDATE());
select @tuoi as N'Tuổi của bạn Sơn Phi Long'

print N'Năm nay, bạn Sơn Phi Long ' +  CONVERT(varchar(3),@tuoi) + N' tuổi' 
go

--2. cac ham he thong
select HOST_ID() as 'host id', HOST_NAME() as 'host name'
go

--3. cac ham toan hoc
declare @number float = RAND() + 100
select @number N'số ngẫu nhiên', 
	CEILING(@number) N'số trần', 
	FLOOR(@number) N'số sàn',
	ROUND(@number,2) N'số làm tròn, 2 số lẻ'
go

--4. cac ham xu ly chuoi ky tu
declare @ho Nvarchar(30) = N'   Lê tấn  ',
		@ten Nvarchar(20) = N' Phát       '

select @ho + @ten,
	   UPPER(@ho) + LOWER(@ten),
	   TRIM(@ho) + TRIM(@ten)  

