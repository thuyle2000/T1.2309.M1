<?php

include_once "../d06_mySQL/course.php";

if (isset($_REQUEST["btSearch"])) {
    $tenKH = $_REQUEST["search"];
    //lay danh sach tat ca cac khoa hoc muon tim theo ten nhap trong o 'search', luu vo mang ds
    $ds = CourseDAO::get(name: $tenKH);
} else {
    //lay danh sach tat ca cac khoa hoc, luu vo mang ds
    $ds = CourseDAO::get();
}

if ($ds == null) {
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-4">
        <h3>List of Courses</h3>

        <div>
            <form action="" method="get">
                <input type="text" name="search" id="search" placeholder="input name for search">
                <button type="submit" name="btSearch" class="btn btn-danger">search</button>
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
            <tbody>
                <?php
                foreach ($ds as $item) {
                    echo "<tr>";
                    echo "<td> $item->id </td>";
                    echo "<td> $item->name </td>";
                    echo "<td> $item->fee </td>";
                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>
    </div>
</body>
</html>