<?php

if (isset($_REQUEST["search"])) {
    include_once "../d06_mySQL/course.php";
    $tenKH = $_REQUEST["search"];
    //lay danh sach tat ca cac khoa hoc muon tim theo ten nhap trong o 'search', luu vo mang ds
    $ds = CourseDAO::get(name: $tenKH);
    echo json_encode($ds);
    exit;
} 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course-live-search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-4">
        <h3>List of Courses</h3>

        <div>
            <form action="" method="get">
                <input type="text" name="search" id="search" placeholder="input name for search">
                <button type="button" name="btSearch" class="btn btn-danger" onclick="showCourse()">search</button>
            </form>
        </div>

        <hr>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>course-id </th>
                    <th>course name</th>
                    <th>course fee</th>
                </tr>
            </thead>
            <tbody id="content">
            </tbody>
        </table>
    </div>
</body>
<script>
    function showCourse() {
        var str = document.getElementById("search").value;
        var xmlhttp = new XMLHttpRequest();
        var path = window.location.pathname;
        xmlhttp.open("GET", path + "?search=" + str, true);
        xmlhttp.send();
     
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                let ds = JSON.parse(this.responseText);
                let a = [];
                ds.forEach(ele => {
                    let item = `<tr><td>${ele.id}</td><td>${ele.name}</td><td>${ele.fee}</td></tr>`;
                    a.push(item);
                });
                document.getElementById("content").innerHTML = a.join("");
            }
        }


    }
    showCourse();
</script>

</html>