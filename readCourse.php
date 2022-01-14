<?php
$servername = "localhost";
$username = "id18274157_courses_database_username";
$password = "7}BKcb35{T]~|{5h";
$dbname = "id18274157_courses_database";

$conn = new mysqli($servername,$username,$password,$dbname);
$respone =array();

$sql='SELECT id,courseName,courseDuration,coursePrice,courseImg,courseLink FROM courses_table';

$result=mysqli_query($conn,$sql);

$course=mysqli_fetch_all($result,MYSQLI_ASSOC);

echo json_encode($course);

?>