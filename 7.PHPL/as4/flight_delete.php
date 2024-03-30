<?php 
// thuc hien chuc nang xoa 1 chuyen bay theo ma so [id] duoc cung cap
if(isset($_REQUEST["id"])){

    include_once "flight.php";

    $id = $_REQUEST["id"];
    
    //goi ham remove() cua class CourseDAO
    if(FlightDAO::remove($id)){
        //da thuc hien thanh cong => quay ve trang flightControl.php
        header("location:flightControl.php");
    }
}