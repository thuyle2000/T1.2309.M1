<?php

include_once "course.php";

if (isset($_REQUEST["btOK"])) {


    //trang da duoc submit,lay du lieu submit luu vo DB
    $id = $_REQUEST["cid"];
    $name = $_REQUEST["cname"];
    $fee = $_REQUEST["cfee"];

    $khoa_hoc = new Course($id, $name, $fee);

    $kq = CourseDAO::update($khoa_hoc);
    if ($kq) {
        //quay ve trang danh sach cac lop hoc
        header("location:course_view.php");
        exit;
    }
}


if (isset($_REQUEST["id"])) {

    $maKH = $_REQUEST["id"];
    $ds = CourseDAO::get(id:$maKH);

    if($ds == null){
        exit;
    }

    $maKH = $ds[0]->id;
    $tenKH = $ds[0]->name;
    $hoc_phi = $ds[0]->fee;
}
else{
    header("location:course_view.php");
    exit;    
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
        <h3>Edit|View Course Detail</h3>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <form action="">

                    <div class="form-group">
                        <label for="">Course ID</label>
                        <input type="text" name="cid" id="cid" 
                        value="<?=$maKH?>" readonly class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Course name</label>
                        <input type="text" name="cname" id="cname" required 
                        value="<?=$tenKH?>" 
                        class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="">Course fee</label>
                        <input type="number" name="cfee" id="cfee" required 
                        value="<?=$hoc_phi?>" 
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