<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>request-demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .error{
            color:red;
        }
    </style>
</head>

<!-- Phan ma kich ban PHP : xu ly du lieu nhap tren form sau khi bam [submit]-->
<?php 
    $name_err = "";
    if(isset($_GET["btnOK"])){
        //user da bam nut [submit]: doc cac du lieu nhap tren form
        $ten = $_GET["user"];
        $nang = $_REQUEST["weight"];
        $gt = $_REQUEST["gender"];
        $que = $_REQUEST["home"];

        //kiem tra du lieu hop le
        if(preg_match("/^[a-z A-Z]{2,}$/",$ten)==false){
            $name_err = "only characters or space allowed !";
        }


        if(empty($name_err)){

            echo "<div class='container mt-5'>";

            echo "<h3>Chuc mung ban da dang ky thanh cong </h3><hr/>";
            echo "<ul>";
            echo "<li> Ho ten : $ten </li>";
            echo "<li>Can nang : $nang </li>";
            echo "<li> Gioi tinh : $gt </li>";
            echo "<li>Que quan : $que </li>";
            echo "</ul>";
            echo "</div>";
    
            exit;
        }

        
    }
?>
<!-- ket thuc ma kich ban PHP -->


<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h3>$_REQUEST[] PHP demo</h3>
                <hr>

                <!-- method="" =>form GET, action="" => action page la trang nay luon -->
                <form> 
                    <div class="form-group">
                        <label for="">user name</label>
                        <span class="error">*
                            <?php echo " ( $name_err )" ?>
                        </span>
                        <input type="text" name="user" id="user" value="nguyen anh huy" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">weight</label>
                        <span class="error">*</span>
                        <input type="number" name="weight" id="weight" value="62" min="30" max="100" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Gender</label>
                        <span class="error">*</span>
                        <div class="form-control">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="rMale" value="nam" 
                                checked>
                                <label class="form-check-label" for="gender">
                                    Males
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="rFemale" value="nu">
                                <label class="form-check-label" for="rFemale">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Home Town</label>
                        <select class="form-select" name="home">
                            <option>Saigon</option>
                            <option value="HN">Hanoi</option>
                            <option selected value="HU">Hue</option>
                            <option value="CT">Can Tho</option>
                        </select>
                    </div>

                    <div class="form-group mt-3" >
                        <button type="submit" name="btnOK" class="btn btn-danger">Submit</button>
                        <button type="reset" class="btn btn-info">Reset</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</body>

</html>