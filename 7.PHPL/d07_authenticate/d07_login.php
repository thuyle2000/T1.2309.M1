<?php
if (isset($_REQUEST["btnOK"])) {
    include_once "account.php";

    //da nhap thong tin login va bam nut submit
    //lay du lieu username va password nhap tren form login
    $user = $_REQUEST["uid"];
    $pass = $_REQUEST["pwd"];

    //goi ham get()
    $kq = AccountDAO::get(username: $user, password: $pass);
    if ($kq) {
        //kiem tra password hop le
        if ($kq[0]->password == $pass) {
            //dang nhap thanh cong -> chuyen trang xem ds cac khoa hoc
            header("location:../d06_mySQL/course_view.php");
            exit;
        } else {
            echo "<h4>Invalid Password !</h4>";
        }
    } else {
        echo "<h4>Invalid Account !</h4>";
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4" style="background-color: antiquewhite;">
                <h3>Login</h3>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">username: </label>
                        <input class="form-control" type="text" name="uid" id="uid" value="guest" required /> <br />
                    </div>
                    <div class="form-group">
                        <label for="">password: </label>
                        <input class="form-control" type="password" name="pwd" id="pwd" value="12345" required /> <br />
                    </div>

                    <div>
                        <input type="submit" value="Submit" class="btn btn-warning" name="btnOK">
                        <input type="reset" value="Reset" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>