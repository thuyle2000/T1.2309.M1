/*  demo cach tao INDEX (lap chi muc) de tang toc do truy xuat du lieu  */

-- open database [db2309.M1]
use [db2309.M1]
go

--1. tao clustered index tren cot ten cua bang sinh vien
select * from tbStudent -- du lieu hien thi theo thu tu nhap lieu (xep theo roll-no)
go

CREATE CLUSTERED INDEX [ixFName] ON tbStudent(fname)
GO

select * from tbStudent -- sau lenh index, du lieu hien thi theo thu tu sap xep cot ten
GO


-- tao non-clustered index tren cot ho cua bang sinh vien
CREATE INDEX [ixLname] ON tbStudent(lastname)
GO

-- tao non-clustered index tren ngay sinh (thu tu giam dan) cua bang sinh vien
CREATE INDEX [ixDob] ON tbStudent(dob DESC)
GO
