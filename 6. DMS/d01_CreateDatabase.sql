-- vi du ve cach tao CSDL 
--1. tao CDSL 'dbDemo'
CREATE DATABASE dbDemo 
GO

/* 2. tao CSDL 'dbDemo2' voi cac mo ta chi tiet:
 - du lieu:
   ten: 'dbDemo2', kt bat dau:16M, kt tang truong: 100M, kt toi da: ko gioi han, ten file: 'F:\data\dbDemo2.mdf'

 - nhat ky:
   ten: 'dbDemo2_log', kt bat dau:16M, kt tang truong: 10%, kt toi da: 300MB, ten file: 'F:\data\dbDemo2_log.ldf'
*/
CREATE DATABASE dbDemo2
ON PRIMARY
(
 name='dbDemo2', size=16, filegrowth=100, maxsize=unlimited, 
 filename='F:\data\dbDemo2.mdf'
)
LOG ON
(
 name='dbDemo2_log', size=16, filegrowth=10%, maxsize=300, 
 filename='F:\data\dbDemo2_log.ldf'
)
GO

/* 3. tao CSDL 'dbDemo4', co them khai bao filegroup voi cac mo ta chi tiet:
 - du lieu:
   * filegroup PRIMARY
   ten: 'dbDemo4', kt bat dau:16M, kt tang truong: 100M, kt toi da: ko gioi han, ten file: 'F:\data\dbDemo4.mdf'
   * filegroup MYGROUP
   ten: 'dbDemo4b', ten file: 'F:\data\dbDemo4b.ndf'

 - nhat ky:
   ten: 'dbDemo4_log', kt tang truong: 10%, kt toi da: 256MB, ten file: 'F:\data\dbDemo4_log.ldf'
*/
CREATE DATABASE dbDemo4
ON PRIMARY
(name='dbDemo4',size=16,filegrowth=100,maxsize=unlimited,filename='F:\data\dbDemo4.mdf'),
FILEGROUP MYGROUP
(name='dbDemo4b', filename='F:\data\dbDemo4b.ndf')
LOG ON
(name='dbDemo4_log', filegrowth=10%, maxsize=256, filename='F:\data\dbDemo4_log.ldf')

GO

-- vi du ve cach xoa CSDL
-- 4. xoa DSDL dbDemo4
DROP DATABASE dbDemo4
GO
-- 5. xoa DSDL dbDemo2
DROP DATABASE dbDemo2
GO

-- 6. xoa DSDL dbDemo
DROP DATABASE dbDemo
GO
