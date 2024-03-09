<?php   
echo "Demo lap trinh dieu kien IF \n";

//lay gia tri ngay-gio hien tai cua may chu web server

$today = date("l j-M-Y \n");    //Tuesday 5-Mar-2024
echo $today;

$today = date("F, d-Y \n");     //March, 05-2024
echo $today;

$today = date("l, d-m-Y \n");   //Tuesday, 05-03-2024
echo $today;


$today = date("l, d-m-Y h:i:s\n");   //Tuesday, 05-03-2024 03:05:13
echo $today;

// set the default timezone to use.
date_default_timezone_set('Asia/Ho_Chi_Minh');
$today = date("l, d-m-Y h:i:s A\n");   //Tuesday, 05-03-2024 09:09:31
echo $today;

//lay gio hien tai cua may chu
$hour = date("H");
echo "Bay gio la $hour gio \n";

if($hour <11){
    echo " >> Good Morning ! \n";
}
else if($hour<16){
    echo " >> Good Afternoon ! \n";
}
else if($hour<21){
    echo " >> Good Evening! \n";
}
else{
    echo " >> Good 9! \n";
}