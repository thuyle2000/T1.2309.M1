/****  demo ve cach tao bang (table)  ****/
--1. tao CSDL [db2309.M1]
Create database [db2309.M1]
on (name='db2309', size=8, filegrowth=10%, maxsize=256,filename='F:\data\db2309.MDF')
log on (name='db2309_log', maxsize=unlimited,filename='F:\data\db2309_log.LDF')
go

-- open CSDL [db2309.M1] de tao bang 
USE [db2309.M1]
go

--2. tao bang khoa hoc [tbCourse]
CREATE TABLE [tbCourse](
	course_id varchar(10) not null,
	course_name varchar(30) not null,
	fee int not null default 100,
	duration int not null default 24, -- 24 thang
	CONSTRAINT coursePK PRIMARY KEY(course_id) 
)
go

--3. them du lieu vo bang khoa hoc [tbCourse]
INSERT [tbCourse](course_id, course_name, fee, duration)
		   VALUES('6715','Programming 2000',900,23)
go

-- xem du lieu cua bang [tbCourse]
SELECT * FROM tbCourse

--them nhieu dong du lieu vo bang khoa hoc [tbCourse]
INSERT [tbCourse] VALUES 
	('7023','IT Course', 1000, 24),
	('7091','New Course', 1200, 24),
	('6000','TesterCourse', default, 6)
go
-- xem du lieu cua bang [tbCourse]
SELECT * FROM tbCourse


-- sua lai hoc phi va ten cua khoa hoc co ma so [6000]
UPDATE [tbCourse] 
	SET [course_name]='Unit Test', fee = 500
	WHERE [course_id] LIKE '6000'

-- xem du lieu cua bang [tbCourse] sau khi update
SELECT * FROM tbCourse

-- xoa khoa hoc co ma so [6715]
DELETE FROM [tbCourse] WHERE [course_id] LIKE '6715'

-- xem du lieu cua bang [tbCourse] sau lenh xoa tren 
SELECT * FROM tbCourse
GO


--3. tao bang lop hoc [tbBatch]
CREATE TABLE tbBatch (
	batch_id int not null identity(500,5),
	batch_name varchar(30),
	[start_date] date,
	fee int,
	c_id varchar(10), 
	CONSTRAINT batchPK PRIMARY KEY NONCLUSTERED (batch_id),
	CONSTRAINT bCourseFK FOREIGN KEY (c_id) REFERENCES [tbCourse](course_id) 
)

--xem du lieu cua bang lop hoc [tbBatch]
SELECT * FROM tbBatch

--nhap 1 so lop hoc vo bang [tbBatch]
SET DATEFORMAT dmy		-- set dinh dang chuoi 'ngay/thang/nam' cho cot kieu DATE
INSERT [tbBatch] VALUES
	('2302.E1', '15/02/2023', 1000, '7023'),
	('2309.M1', '23/09/2023', 1195, '7091')

--xem du lieu cua bang [tbBatch]
SELECT * FROM tbBatch

--them 1 so lop moi, nhung chua xd ngay start-date
INSERT [tbBatch] (batch_name,c_id,fee) VALUES
	('2402.M0','7091',1180),
	('2402.M1','7091',1180),
	('2403.E0','7091',1250)
--xem du lieu cua bang [tbBatch]
SELECT * FROM tbBatch

-- bo sung them thuoc tinh rang buoc duy nhat cho cot ten lop [batch_name] cua bang [tbBatch]
ALTER TABLE [tbBatch]
	ADD CONSTRAINT batch_nameUNI UNIQUE (batch_name)


-- bo sung them thuoc tinh rang buoc kiem tra cho cot hoc phi [fee] cho cua bang [tbBatch]
ALTER TABLE [tbBatch]
	ADD CONSTRAINT batch_feeCHK CHECK (fee >=0)