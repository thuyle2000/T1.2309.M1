<?php 
//kiem tra form login da thuc hien chua; da bam nut [submit] tren form login ?
if(isset($_POST["btnOK"])== false){
    //Chua nhap lieu cho form login => quay ve form login
    header("Location: d03_login.php");
    exit;
}

//code xu ly du lieu nhap tren form d03_login.php
$username = $_POST["uid"];
$pass = $_POST["pwd"];

//mang chua ds cac tai khoan hop le
$accounts = [
    "admin" => "123456",
    "guest" => "123",
    "long" => "abc",
    "aptech" => "fpt"
];

//kiem tra username va pass duoc nhap tren form login
foreach ($accounts as $id => $mk) {
    if($id==$username && $mk==$pass){
        echo "<h3>Hello, $username ! </h3>";
        exit;
    }
}


echo "<h3> Tai khoan dang nhap chua dung. Vui long thuc hien lai !</h3>";
echo "<button onclick='javascript:history.back()' class='btn btn-warning'>back</button>";