<?php 

if(isset($_REQUEST["btOK"])){

    include_once "course.php";

    //trang da duoc submit,lay du lieu submit luu vo DB
    $name = $_REQUEST["cname"];
    $fee = $_REQUEST["cfee"];

    $khoa_hoc = new Course(null, $name, $fee);

    $kq = CourseDAO::insert($khoa_hoc);
    if($kq){
        //quay ve trang danh sach cac lop hoc
        header("location:course_view.php");
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert-course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-4">
        <h3>Insert New Course</h3>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <form action="">
                    <div class="form-group">
                        <label for="">Course name</label>
                        <input type="text" name="cname" id="cname" 
                        required value="it" 
                        class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Course fee</label>
                        <input type="number" name="cfee" id="cfee" 
                        required value="1234" 
                        class="form-control">
                    </div>

                    <div class="mt-4">                       
                        <button type="submit" class="btn btn-danger" name="btOK">submit</button>
                        <button type="reset" class="btn btn-info">reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>