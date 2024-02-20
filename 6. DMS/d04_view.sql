/*  demo cach tao VIEW (virtual table)  */

-- open database [db2309.M1]
use [db2309.M1]
go


--1. truy van truyen thong
-- xem ds sv nam, viet lenh
SELECT * FROM tbStudent WHERE gender = 1

-- xem ds sv nu, viet lenh
SELECT * FROM tbStudent WHERE gender = 0
go

-- TRUY VAN THONG QUA VIEW
-- tao view [vwSchoolBoy] chua ds sv nam
CREATE VIEW [vwSchoolBoy] AS
	SELECT * FROM tbStudent WHERE gender = 1
GO

-- tao view [vwSchoolGirl] chua ds sv nu
CREATE VIEW [vwSchoolGirl] AS
	SELECT * FROM tbStudent WHERE gender = 0
go



-- xem ds nam sinh
SELECT * FROM vwSchoolBoy

-- xem ds nu sinh
SELECT * FROM vwSchoolGirl
go

select * from tbStudent
select * from tbBatch
select * from tbCourse
go

--2. truy van truyen thong
-- xem ds sv bao gom cac cot: 
-- ma so, hoten, gioi tinh, ngay sinh,  [bang tbStudent]
-- (ten lop, ngay khai giang),			[bang tbBatch]
-- (ten khoa hoc, thoi gian hoc)		[bang tbCourse]
SELECT sv.roll_no, sv.lastname, sv.fname, sv.gender, sv.dob,
	   lop.batch_name, lop.[start_date],
	   ct.course_name, ct.duration
FROM tbStudent [sv] JOIN tbBatch [lop] ON sv.b_no = lop.batch_id
					JOIN tbCourse [ct] ON lop.c_id = ct.course_id

go

-- TRUY VAN THONG QUA VIEW 
-- tao view [vwStudent] duoc tao ra tu 3 bang
CREATE VIEW [vwStudent] AS
SELECT sv.roll_no [ma so], sv.lastname [ho], sv.fname [ten], 
	   sv.gender [gioi tinh], sv.dob [ngay sinh],
	   DATEDIFF(YY, sv.dob, GETDATE()) [tuoi],
	   lop.batch_name [ten lop], lop.[start_date] [ngay khai giang],
	   ct.course_name [ten khoa hoc], ct.duration [thoi gian hoc (thang)]
FROM tbStudent [sv] JOIN tbBatch [lop] ON sv.b_no = lop.batch_id
					JOIN tbCourse [ct] ON lop.c_id = ct.course_id
GO

-- xem ds sv 
SELECT * FROM vwStudent
go

-- 3. xem noi dung lap trinh cua view, su dung store SP_HELPTEXT, vi du  
-- xem noi dung dinh nghia cua view nam sinh
SP_HELPTEXT [vwSchoolboy]
GO

-- xem noi dung dinh nghia cua view sinh vien
SP_HELPTEXT [vwStudent]
GO


-- 4. sua lai dinh nghia view nam sinh, ko cho phep them nu sinh
ALTER VIEW [vwSchoolBoy] AS
	SELECT * FROM tbStudent WHERE gender = 1
	WITH CHECK OPTION -- kiem tra du lieu nhap vo view phai tuan thu dk WHERE
GO

-- kiem tra tac dung cua menh de WITH CHECK OPTION
-- a/ them 1 nam sinh vo bang sinh vien, thong qua view [vwSchoolBoy]: OK
SET DATEFORMAT dmy
INSERT vwSchoolBoy VALUES
('sv17', 'nguyen phi','khanh', 1,'25/12/2005',null,510,'sv11')

select * from tbStudent
go

-- b/ them 1 nu sinh vo bang sinh vien, thong qua view [vwSchoolBoy]: FAIL !
SET DATEFORMAT dmy
INSERT vwSchoolBoy VALUES
('sv18', 'Tran Ngoc','Lien', 0,'25/12/2005',null,510,'sv11')
go

