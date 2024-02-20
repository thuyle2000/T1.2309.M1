-- open CSDL [db2309.M1] de lam viec 
use [db2309.M1]
go


--1.  tao 1 store procedure xem ds cac ban sinh vien nu
-- =============================================
-- Author:		Long
-- Create date: 20-Feb-2024
-- Description:	in ra ds cac ban nu sinh
-- =============================================
CREATE PROCEDURE up_SchoolGirl
AS
BEGIN
	SELECT * FROM tbStudent WHERE gender = 0
END
GO

-- TEST CASE: XEM DS NU SINH 
EXEC up_SchoolGirl
GO


--2.  tao 1 store procedure xem ds cac ban sinh vien nam
-- =============================================
-- Author:		Long
-- Create date: 20-Feb-2024
-- Description:	in ra ds cac ban nam sinh, va dem tong so sv, sv nam
-- =============================================
CREATE PROCEDURE up_SchoolBoy
AS
BEGIN
	SELECT * FROM tbStudent WHERE gender = 1		-- lay ds sv nam 
	SELECT COUNT(*) [tong so sv] FROM tbStudent		-- dem tong so sv
	SELECT COUNT(*) [tong so sv nam] FROM tbStudent	 
								 WHERE gender = 1	-- dem tong so sv nam
END
GO

-- TEST CASE: XEM DS NAM SINH 
EXEC up_SchoolBoy
GO


--3.  tao 1 store procedure xem ds cac ban sinh vien theo gt duoc yeu cau
-- =============================================
-- Author:		Long
-- Create date: 20-Feb-2024
-- Description:	in ra ds cac ban nam sinh, va dem tong so sv, sv nam
-- Parameter  : gender (input, default =1), 
--				total_student(output), total_boy (output)
-- =============================================
CREATE PROCEDURE up_Students
	@total_student INT OUTPUT,
	@total_boy INT OUTPUT,
	@gender BIT = NULL
AS
BEGIN
	IF (@gender IS NULL)
		SELECT * FROM tbStudent  -- lay toan bo ds sinh vien
	ELSE
		BEGIN
			-- lay ds sv theo gioi tinh
			SELECT * FROM tbStudent WHERE gender = @gender	
		END
	

	-- dem tong so sv, luu vo tham so OUTPUT @total_student
	SELECT @total_student=COUNT(*) FROM tbStudent
		
	-- dem tong so sv nam, luu vo tham so OUTPUT @total_boy
	SELECT @total_boy=COUNT(*) FROM tbStudent	 
							   WHERE gender = 1
END		
GO

-- TEST CASE: 
-- CASE 1: XEM DS SINH VIEN
DECLARE @tong_so_sv INT, @tong_so_sv_nam INT
EXEC up_Students @tong_so_sv OUTPUT, @tong_so_sv_nam OUTPUT
SELECT @tong_so_sv [tong so sv], 
	   @tong_so_sv_nam [so luong nam sinh],
	   @tong_so_sv - @tong_so_sv_nam [so luong nu sinh]
GO

-- CASE 2: XEM DS SINH VIEN NU
DECLARE @tong_so_sv INT, @tong_so_sv_nam INT
EXEC up_Students @tong_so_sv OUTPUT, @tong_so_sv_nam OUTPUT, 0
SELECT @tong_so_sv [tong so sv], 
	   @tong_so_sv - @tong_so_sv_nam [so luong nu sinh]
GO

-- CASE 3: XEM DS SINH VIEN NAM
DECLARE @tong_so_sv INT, @tong_so_sv_nam INT
EXEC up_Students @tong_so_sv OUTPUT, @tong_so_sv_nam OUTPUT, 1
SELECT @tong_so_sv [tong so sv], 
	   @tong_so_sv_nam [so luong nam sinh]
GO



--4.  tao 1 store procedure thay doi diem thi cua cac sinh vien theo do tuoi 
-- =============================================
-- Author:		Khanh
-- Create date: 20-Feb-2024
-- Description:	thay doi diem thi cua cac sv theo do tuoi dc yeu
-- Parameter  : mark (input, default = 10), 
--				yob (input, default = 2000), 
--				total_exams (output, int)
-- =============================================
CREATE PROCEDURE up_ChangeMark
	@total_exam INT OUTPUT,
	@mark INT = 10,
	@yob INT = 2000
AS
BEGIN
	UPDATE tbExam 
		SET mark +=@mark
		WHERE st_id IN ( SELECT roll_no FROM tbStudent WHERE YEAR(dob) = @yob )
		      AND (mark+@mark) BETWEEN 0 AND 100

	SET @total_exam =  @@ROWCOUNT		  		   
END
GO

-- TEST CASE 1: Tang 10 diem cho cac sv sinh nam 2000
DECLARE @tong_so_bai_thi INT
EXEC up_ChangeMark @tong_so_bai_thi OUTPUT
SELECT @tong_so_bai_thi [tong so bai thi duoc doi diem]
GO

-- TEST CASE 2: giam 5 diem dv cac sv sinh nam 2003
DECLARE @tong_so_bai_thi INT
EXEC up_ChangeMark @tong_so_bai_thi OUTPUT, -5, 2003
SELECT @tong_so_bai_thi [tong so bai thi duoc doi diem]
GO

--5.  sua lai store procedure [up_ChangeMark]
--   thay doi diem thi cua cac sinh vien theo do tuoi, va in ra cac bao thi
-- =============================================
-- Author:		Khanh
-- Create date: 20-Feb-2024
-- Description:	thay doi diem thi cua cac sv theo do tuoi dc yeu
-- Parameter  : mark (input, default = 10), 
--				yob (input, default = 2000), 
--				total_exams (output, int)
-- =============================================
ALTER PROCEDURE up_ChangeMark
	@total_exam INT OUTPUT,
	@mark INT = 10,
	@yob INT = 2000
AS
BEGIN
	-- xem ds cac bai thi truoc khi doi diem 
	SELECT * FROM tbExam 
		WHERE st_id IN ( SELECT roll_no FROM tbStudent WHERE YEAR(dob) = @yob )
		      AND (mark+@mark) BETWEEN 0 AND 100

	UPDATE tbExam 
		SET mark +=@mark
		WHERE st_id IN ( SELECT roll_no FROM tbStudent WHERE YEAR(dob) = @yob )
		      AND (mark+@mark) BETWEEN 0 AND 100

	SET @total_exam =  @@ROWCOUNT
	
	-- xem ds cac bai thi sau khi doi diem 
	SELECT * FROM tbExam 
		WHERE st_id IN ( SELECT roll_no FROM tbStudent WHERE YEAR(dob) = @yob )   
END
GO

-- TEST CASE 1: Tang 10 diem cho cac sv sinh nam 2000
DECLARE @tong_so_bai_thi INT
EXEC up_ChangeMark @tong_so_bai_thi OUTPUT
SELECT @tong_so_bai_thi [tong so bai thi duoc doi diem]
GO

-- TEST CASE 2: giam 5 diem dv cac sv sinh nam 2003
DECLARE @tong_so_bai_thi INT
EXEC up_ChangeMark @tong_so_bai_thi OUTPUT, -5, 2003
SELECT @tong_so_bai_thi [tong so bai thi duoc doi diem]
GO
-- TEST CASE 2: giam 5 diem dv cac sv sinh nam 2003
DECLARE @tong_so_bai_thi INT
EXEC up_ChangeMark @tong_so_bai_thi OUTPUT, -5, 2003
SELECT @tong_so_bai_thi [tong so bai thi duoc doi diem]
GO