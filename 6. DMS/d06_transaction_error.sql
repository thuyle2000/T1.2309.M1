--open database  [db2309.M1]
use [db2309.M1]
go

-- xem danh sach cac khoa hoc
select * from tbCourse

-- them 1 khoa hoc moi
insert tbCourse values ('2000', 'ACCP 2000', 900, 22)
-- xem danh sach cac khoa hoc
select * from tbCourse
go

-- them nhieu khoa hoc moi
insert tbCourse values 
('1999', 'ACCP 1999', 890, 20),
('1998', 'ACCP 1998', 880, 20)

-- xem danh sach cac khoa hoc
select * from tbCourse
go


-- dinh nghia 1 explicit transaction
BEGIN TRAN
	-- them nhieu khoa hoc moi
	insert tbCourse values 
	('2005', 'ACCP 2005', 890, 24),
	('2006', 'ACCP 2006', 880, 24)

	-- them 1 mon hoc moi
	insert tbModule values
	('DMS','SQL Server',56, 300)

ROLLBACK -- Tu choi lenh 2 insert tren
GO

-- xem danh sach cac khoa hoc
select * from tbCourse
go

-- xem danh sach cac mon hoc
select * from tbModule
go


-- demo TRY-CATCH
BEGIN TRY
	-- them lai cac khoa hoc da co, de quan sat kt bay loi
	insert tbCourse values 
		('1999', 'ACCP 1999', 890, 20),
		('1998', 'ACCP 1998', 880, 20)
	print 'Them cac khoa hoc moi thanh cong !'
END TRY
BEGIN CATCH
	print 'Loi sai: Ko the them cac khoa hoc vo DB !'
	select ERROR_MESSAGE() [thong bao loi],
		   ERROR_NUMBER() [ma loi],
		   ERROR_SEVERITY() [muc do nghiem trong],
		   ERROR_LINE() [# dong linh],
		   ERROR_STATE() [trang thai]
END CATCH
GO