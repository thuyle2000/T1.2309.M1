/* demo ky thuat truy van du lieu nang cao trong cac bang */

-- open CSDL db2309.M1
use [db2309.M1]
go

-- xem ds sinh vien
select * from tbStudent

-- them 1 so sv vao bang tbStudent
SET DATEFORMAT dmy
INSERT tbStudent VALUES 
('sv11','Ngo Minh','Tuan',1, '21/09/2000','119',510,null),
('sv12','Nguyen minh','Hoang',1, '04/09/1997','911',510,'sv11'),
('sv13','Huynh Gia','Phu',1, '21/09/2000','1080',510,'sv11'),
('sv14','Le Trong','Tri',1, '17/04/2005','1081',510,'sv11'),
('sv15','Tran Que','Nghi',0, '04/04/1996','1234',505,'sv01'),
('sv16','Lam Thien','Bao',1, '24/11/2003','4567',505,'sv01')
go



-- 1. dem sinh vien theo do tuoi
select dob, count(*)  
	from tbStudent group by dob 

select YEAR(dob) , count(*)  
	from tbStudent group by YEAR(dob) 

select YEAR(dob) N'năm sinh', count(*)  N'số sv' 
	from tbStudent group by YEAR(dob) 
go

-- dem sinh vien theo do tuoi, chi chon nhom co tren 2 sv
select YEAR(dob) N'năm sinh', count(*)  N'số sv' 
	from tbStudent 
	group by YEAR(dob)
	having count(*)>=2

select YEAR(dob) N'năm sinh', 
	   DATEDIFF(YY, dob, GETDATE()) N'tuổi',
	   count(*)  N'số sv' 
	from tbStudent 
	group by YEAR(dob), DATEDIFF(YY, dob, GETDATE())
	having count(*)>=2
go

-- dem sinh vien theo do tuoi, chi chon nhom co tren 2 sv, xep ket qua theo so luong sv 
select YEAR(dob) N'năm sinh', 
	   DATEDIFF(YY, dob, GETDATE()) N'tuổi',
	   count(*)  N'số sv' 
	from tbStudent 
	group by YEAR(dob), DATEDIFF(YY, dob, GETDATE())
	having count(*)>=2
	order by count(*)


select YEAR(dob) N'năm sinh', 
	   DATEDIFF(YY, dob, GETDATE()) N'tuổi',
	   count(*)  N'số sv' 
	from tbStudent 
	group by YEAR(dob), DATEDIFF(YY, dob, GETDATE())
	having count(*)>=2
	order by 3	
go

-- dem so sinh vien theo lop, gioi tinh: dung toan tu CUBE
select b_no N'Mã lớp',
	   gender N'giới tính', 
	   count(*)  N'số sv' 
	from tbStudent 
	group by CUBE (gender, b_no)
go

-- dem so sinh vien theo lop, gioi tinh : dung toan tu ROLLUP
select b_no N'Mã lớp',
	   gender N'giới tính', 
	   count(*)  N'số sv' 
	from tbStudent 
	group by ROLLUP (b_no, gender)
	
go


/* demo truy van con : sub-query */
-- chuan bi so lieu
-- 1. tao bang mon hoc
CREATE TABLE tbModule
( module_id varchar(5) not null,
  module_name varchar(40) unique,
  [hours] tinyint not null default 40,
  fee smallint not null default 0,
  CONSTRAINT modulePK PRIMARY KEY NONCLUSTERED (module_id),
  CONSTRAINT moduleHour CHECK ([hours] BETWEEN 4 AND 80),
  CONSTRAINT moduleFee CHECK ([fee] >=0)
) 

INSERT tbModule VALUES
('LBEP','Logic building with C', 60, 220),
('HCJS','Web design With HTML,CSS,JS', 60, 250),
('UIUX','UI/UX designer', 20, 100),
('RJS','ReactJS Programming', 23, 180)
go

-- 2. tao bang diem ket qua thi
CREATE TABLE tbExam (
	exam_id INT Identity(1,1), -- so thu tu tang tu dong bat dau 1
	st_id VARCHAR(10) NOT NULL,
	m_id VARCHAR(5) NOT NULL,
	mark tinyint NOT NULL DEFAULT 0,
	CONSTRAINT ExamPK PRIMARY KEY NONCLUSTERED (exam_id),
	CONSTRAINT ExamMark CHECK ([mark] BETWEEN 0 AND 100)
)

INSERT tbExam VALUES
('sv01','LBEP', 90), ('sv01','LBEP', 60),
('sv02','LBEP', 50), ('sv02','LBEP', 37),('sv02','LBEP', 73),
('sv03','LBEP', 34), ('sv03','LBEP', 50),('sv03','LBEP', 30),('sv03','LBEP', 60),
('sv04','LBEP', 50), ('sv04','LBEP', 50),
('sv10','LBEP', 30), ('sv10','LBEP', 70), ('sv10','LBEP', 50),
('sv09','LBEP', 80), ('sv10','LBEP', 40), ('sv10','LBEP', 95)

INSERT tbExam VALUES
('sv01','HCJS', 70), ('sv01','HCJS', 50),('sv01','HCJS', 80),
('sv05','HCJS', 60), ('sv05','HCJS', 87),
('sv03','HCJS', 43), ('sv03','HCJS', 50),
('sv07','HCJS', 50), ('sv07','HCJS', 50),('sv07','HCJS', 30),('sv07','HCJS', 60),
('sv08','HCJS', 30), ('sv08','HCJS', 70), ('sv08','HCJS', 50),
('sv09','HCJS', 82), ('sv09','HCJS', 65),
('sv11','HCJS', 34), ('sv11','HCJS', 62),('sv11','HCJS', 82),('sv11','HCJS', 90)

INSERT tbExam VALUES
('sv01','UIUX', 50), ('sv02','UIUX', 90),('sv03','UIUX', 80),
('sv04','UIUX', 60), ('sv05','UIUX', 87),('sv06','UIUX', 43), 
('sv07','UIUX', 50), ('sv08','UIUX', 50),('sv09','UIUX', 78),
('sv10','UIUX', 36), ('sv10','UIUX', 100),
('sv12','UIUX', 63), ('sv13','UIUX', 90)
go

--2.  xem bang diem thi
-- xem bang diem mon C
select * from tbExam WHERE m_id LIKE 'LBEP'

-- lay ds sv (ma so) da thi mon C
select st_id from tbExam WHERE m_id LIKE 'LBEP'

select DISTINCT st_id from tbExam WHERE m_id LIKE 'LBEP' -- loai dong lap lai

-- tim ds sv chua du thi mon C
select * from tbStudent 
	WHERE roll_no NOT IN 
			(select DISTINCT st_id from tbExam WHERE m_id LIKE 'LBEP' )
go

-- xem ket qua thi, bao gom luon ten sv va ten mon hoc
select * from tbExam
select thi.*, sv.lastname + ' ' + sv.fname [fullname], mh.module_name
	from tbExam [thi] 
	     JOIN tbStudent [sv] ON thi.st_id = sv.roll_no
		 JOIN tbModule [mh] ON thi.m_id = mh.module_id 
go
		 

-- xem ket qua thi chua dat yeu cau, bao gom luon ten sv va ten mon hoc
select * from tbExam
select thi.*, sv.lastname + ' ' + sv.fname [fullname], mh.module_name
	from tbExam [thi] 
	     JOIN tbStudent [sv] ON thi.st_id = sv.roll_no
		 JOIN tbModule [mh] ON thi.m_id = mh.module_id 
	where mark <40
go

-- xem kq thi dat 100 diem, bao gom luon ten sv va ten mon hoc
select * from tbExam
select thi.*, sv.lastname + ' ' + sv.fname [fullname], mh.module_name
	from tbExam [thi] 
	     JOIN tbStudent [sv] ON thi.st_id = sv.roll_no
		 JOIN tbModule [mh] ON thi.m_id = mh.module_id 
	where mark =100
go

-- xem ds sinh vien, bao gom ten cua truong nhom
select * from tbStudent
select sv.*, tn.fname [leader name]
	from tbStudent [sv]
			JOIN tbStudent [tn] ON sv.leader = tn.roll_no

select sv.*, tn.fname [leader name]
	from tbStudent [sv]
			LEFT JOIN tbStudent [tn] ON sv.leader = tn.roll_no

select sv.*, ISNULL(tn.fname, sv.fname) [leader name]
	from tbStudent [sv]
			LEFT JOIN tbStudent [tn] ON sv.leader = tn.roll_no
	order by [leader name]  
go
 