<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>



<body>
    <div class="container mt-3">

        <!-- ma PHP chay tren Web Server -->
        <?php
            $uid = "long";
            $pwd = "123";
            //kiem tra nut submit dc click chua
            if(isset($_REQUEST["btnOK"])){
                if(empty($_REQUEST["rem"])==false){
                    //co yc ghi nho account: tao cookies de luu TK 60s
                    setcookie("user",$_REQUEST["uid"], time()+60);
                    setcookie("pass",$_REQUEST["pwd"], time()+60);
                    echo "<h4>Account has been saved in 60s! </h4>";
                }
                else{
                    //xoa cookies
                    setcookie("user",$_REQUEST["uid"], time()-60);
                    setcookie("pass",$_REQUEST["pwd"], time()-60);                    
                }

                $uid = $_REQUEST["uid"];
                $pwd = $_REQUEST["pwd"];
            }
            
        ?>
        <!-- ket thuc ma PHP -->


        <h3>Cookies demo</h3>
        <hr>
        <div class="row mt-5">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">user name</label>
                        <input type="text" name="uid" id="uid" 
                        value="<?php  
                        if(isset($_COOKIE["user"])){
                            echo $_COOKIE["user"];
                        }
                        else{
                            echo $uid;
                        } ?>"                         
                        required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">password</label>
                        <input type="password" name="pwd" id="pwd" 
                        value="<?php  
                        if(isset($_COOKIE["pass"])){
                            echo $_COOKIE["pass"];
                        }
                        else{
                            echo $pwd;
                        } ?>" 
                        required class="form-control">
                    </div>

                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" value="true" id="rem" name="rem" checked>
                        <label class="form-check-label" for="rem">
                            Remember Account
                        </label>
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