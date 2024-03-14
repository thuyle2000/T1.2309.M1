<?php 
// thuc hien chuc nang xoa 1 khoa hoc theo ma so [id] duoc cung cap
if(isset($_REQUEST["id"])){

    include_once "course.php";

    $id = $_REQUEST["id"];
    
    //goi ham remove() cua class CourseDAO
    if(CourseDAO::remove($id)){
        //da thuc hien thanh cong => quay ve trang course_view.php
        header("location:course_view.php");
    }
}