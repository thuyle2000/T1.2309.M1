<?php 

include_once "course.php";
//lay danh sach cac khoa hoc, luu vo mang ds
$ds = CourseDAO::get();  
if($ds == null){
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
        <p>
            <a href="course_insert.php">Insert new Course</a>
        </p>
        <hr>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>course-id </th>
                    <th>course name</th>
                    <th>course fee</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($ds as $item) {
                    echo "<tr>";
                    echo "<td> $item->id </td>";
                    echo "<td> $item->name </td>";
                    echo "<td> $item->fee </td>";
                    echo "<td> 
                          <a href='course_delete.php?id=$item->id'   
                             onclick='return DongY();' > Delete </a> 
                          </td>";

                    echo "</tr>";
                }                
                ?>

            </tbody>
        </table>
    </div>

    <script>
        function DongY(){
            return confirm("Are u sure ?");
        }
    </script>
</body>

</html>