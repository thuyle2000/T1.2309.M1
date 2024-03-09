<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-3">

        <!-- ma PHP chay tren Web Server -->
        <?php
        session_start();

        if(isset($_REQUEST["btnOut"])){
            // session_unset();
            session_destroy();
        }

        $uid = "long";
        $pwd = "123";
        //kiem tra nut submit dc click chua
        if (isset($_REQUEST["btnOK"])) {
            $_SESSION["user"] = $_REQUEST["uid"];
            $_SESSION["pass"] = $_REQUEST["pwd"];
        }

        ?>
        <!-- ket thuc ma PHP -->

        <h3>Session demo</h3>
        <hr>

        <?php 
            if(isset($_SESSION["user"])){
                echo "<h4>Hello, " . $_SESSION['user'] . "</h4>";
                echo "<p>Welcome to PHP Session Demo ! </p>";
                echo "<form>";
                echo "<button type='submit' name='btnOut' class='btn btn-danger'>logout</button>";
                echo "</form>";
                exit;
            }
        ?>



        <div class="row mt-5">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">user name</label>
                        <input type="text" name="uid" id="uid" value="" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">password</label>
                        <input type="password" name="pwd" id="pwd" value="" required class="form-control">
                    </div>


                    <div class="mt-3">
                        <button type="submit" name="btnOK" class="btn btn-danger">submit</button>
                        <button type="reset" class="btn btn-info">reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>