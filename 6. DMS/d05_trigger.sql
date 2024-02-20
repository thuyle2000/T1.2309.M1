use [db2309.M1]
go


--xem ds sv theo lop hoc
select * from tbStudent order by b_no
select b_no [ma lop], count(*) [si so] from tbStudent group by b_no
go

--1. tao trigger kiem tra si so toi da cua 1 lop hoc la 12
CREATE TRIGGER tg_siso ON tbStudent
	AFTER INSERT, UPDATE
AS
BEGIN
	-- dem so sv dang ky lop hoc (dang ky moi INSERT hoac doi lop UPDATE)
	SELECT b_no, COUNT(*) [siso] FROM tbStudent 
				WHERE b_no IN (SELECT DISTINCT b_no FROM inserted)
				GROUP BY b_no  HAVING COUNT(*) > 12

	IF EXISTS ( SELECT b_no FROM tbStudent 
				WHERE b_no IN (SELECT DISTINCT b_no FROM inserted)
				GROUP BY b_no
				HAVING COUNT(*) > 12 )
	BEGIN
		print 'LOI: Mot lop hoc si so ko the vuot qua 12! Tu choi thao tac !'
		ROLLBACK
	END
END
GO
-- TEST CASE 1:  thanh cong neu them sv moi vo lop 510
SELECT * FROM tbStudent ORDER BY b_no
INSERT tbStudent VALUES ('sv40','Ronaldo', 'Ricky', 1, '20001231', 911, 510, 'sv11')
SELECT * FROM tbStudent ORDER BY b_no
GO

-- TEST CASE 2:  that bai neu them sv moi vo lop 505
SELECT * FROM tbStudent ORDER BY b_no
INSERT tbStudent VALUES ('sv41','Tran Tieu', 'Vy', 0, '20000815', 115, 505, 'sv04')
SELECT * FROM tbStudent ORDER BY b_no 
GO

-- TEST CASE 3:  that bai neu chuyen lop cho sv 'sv10', tu 505 vo lop 510
SELECT * FROM tbStudent ORDER BY b_no
UPDATE tbStudent
	SET b_no = 510, leader='sv11'
	WHERE roll_no LIKE 'sv10'
SELECT * FROM tbStudent ORDER BY b_no
GO

-- TEST CASE 4:  thanh cong neu chuyen lop cho sv 'sv10', tu 505 vo lop 510
SELECT * FROM tbStudent ORDER BY b_no
UPDATE tbStudent
	SET b_no = 510
	WHERE roll_no LIKE 'sv10'
SELECT * FROM tbStudent ORDER BY b_no
GO

--2. tao trigger khon cho phep doi ten mon hoc cua bang tbModule
CREATE TRIGGER tg_Monhoc ON tbModule
	AFTER UPDATE
AS
BEGIN
	IF UPDATE(module_name)
	BEGIN
		print 'LOI: ko duoc phep doi ten mon hoc ! Tu choi thao tac! '
		ROLLBACK
	END
END
GO

-- TEST CASE 1:  thanh cong neu doi hoc phi mon hoc
SELECT * FROM tbModule
UPDATE tbModule SET fee = 120 WHERE module_id LIKE 'UIUX'
SELECT * FROM tbModule
GO
-- TEST CASE 2:  thanh cong neu doi ten mon hoc
SELECT * FROM tbModule
UPDATE tbModule SET module_name = 'thiet ke giao dien' WHERE module_id LIKE 'UIUX'
SELECT * FROM tbModule
GO