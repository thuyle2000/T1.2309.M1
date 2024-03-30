<?php 

// ham tao ket noi den CSDL PHP
function fn_connect(){
    $host = "localhost:3306";
    $user = "root";
    $db = "dbPHP";
    
    $cn = mysqli_connect(hostname:$host, username:$user,database:$db);

    if($cn == false){
        die(" >> LOI : khong the ket noi den CSDL <br/> " . mysqli_connect_error());
    }
    // echo " >> Ket noi thanh cong den CSDL [$db] ! ";
    return $cn;
}



// ham tao ket noi den CSDL PHP (lap trinh huong doi tuong OOP)
function fn_connect_oop(){
    $host = "localhost:3306";
    $user = "root";
    $db = "dbPHP";
    
    $cn = new mysqli(hostname:$host, username:$user,database:$db);

    if($cn->connect_errno){
        die(" >> LOI : khong the ket noi den CSDL <br/> " . $cn->connect_error);
    }
    // echo " >> Ket noi thanh cong den CSDL [$db] ()! ";
    return $cn;
}


// test thu ham fn_connect()
// fn_connect();

// test thu ham fn_connect_oop()
// fn_connect_oop();