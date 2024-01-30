/* demo  cach truy van tim kiem du lieu trong cac bang */

-- open CSDL db2309.M1
use [db2309.M1]
go

select * from tbBatch
go


--1. tao bang sinh vien [tbStudent]
CREATE TABLE [tbStudent] (
	roll_no varchar(10) not null,
	lastname varchar(20),
	fname varchar(10) not null,
	gender bit not null default 1,
	dob date ,
	contact varchar(50),
	b_no int,
	leader varchar(10),
	CONSTRAINT studentPK PRIMARY KEY NONCLUSTERED (roll_no),
	CONSTRAINT stBatchFK FOREIGN KEY (b_no) REFERENCES tbBatch(batch_id),
	CONSTRAINT stRollnoFK FOREIGN KEY (leader) REFERENCES tbStudent(roll_no)
) 

-- them du lieu vo bang sinh vien tbStudent
SET DATEFORMAT dmy
INSERT tbStudent VALUES
('sv01', 'Nguyen Trang Thanh', 'Vu', 1, '06/03/2000','911',505, null),
('sv02', 'Le tan', 'Phat', 1, '01/05/1998','119',505, 'sv01'),
('sv03', 'Son phi', 'Long', 1, '19/01/2002','1234',505, 'sv01'),
('sv04', 'Le huu xuan', 'Binh', 1, '31/05/1999','911',505, null),
('sv05', 'Nguyen quoc', 'Huy', 0, '01/05/2003','118',505, 'sv04'),
('sv06', 'Doan thanh', 'Tung', 1, '15/09/2005','1080',505, 'sv04'),
('sv07', 'Tran nhat', 'Khanh', 0, '15/09/2005','1088',505, null),
('sv08', 'Nguyen Mai', 'Trinh', 0, '02/08/2001',null,505, 'sv07'),
('sv09', 'Phan Thanh', 'Hau', 0, '24/01/2001','1009',505, 'sv07'),
('sv10', 'Le Tran Hoang', 'Phuc', 1, '21/12/1999',null,505, 'sv07')
go


-- xem ds sinh vien
select * from tbStudent

-- xem ds sinh vien bao gom cac cot: ms, ho, ten va ngay sinh
select roll_no, lastname, fname, dob from tbStudent

-- xem ds sinh vien: noi ho + ten, va doi ten cac cot ket qua cho de doc
select roll_no [ma so], lastname +' '+ fname [ho va ten], dob [ngay sinh]
from tbStudent

-- xem ds sinh vien: ma so, ho ten, ngay sinh va tuoi
select roll_no [ma so], lastname +' '+ fname [ho va ten], 
	   dob [ngay sinh], DATEDIFF(YY, dob, GETDATE()) [tuoi]
from tbStudent

-- xem/tim ds nu sinh
select * from tbStudent where gender = 0

-- xem/tim ds sinh vien sinh truoc nam 2000
select * from tbStudent where YEAR(dob)<=2000

-- xem/tim sinh vien co ho 'le'
select * from tbStudent where lastname LIKE 'le %'

-- xem/tim sinh vien co ho 'tran'
select * from tbStudent where lastname LIKE 'tran %'

-- xem/tim sinh vien co ho 'tran' hoac 'nguyen'
select * from tbStudent 
	where lastname LIKE 'tran %' OR  lastname LIKE 'Nguyen %'