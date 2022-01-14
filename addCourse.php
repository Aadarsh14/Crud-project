<?php

$servername = "localhost";
$username = "id18274157_courses_database_username";
$password = "7}BKcb35{T]~|{5h";
$dbname = "id18274157_courses_database";

$conn = new mysqli($servername,$username,$password,$dbname);
$respone =array();

if($_POST['courseName'] && $_POST['courseDuration'] && $_POST['coursePrice'] && $_POST['courseImg'] && $_POST['courseLink'])
{
$courseName=$_POST['courseName'];
$courseDuration=$_POST['courseDuration'];
$coursePrice=$_POST['coursePrice'];
$courseImg=$_POST['courseImg'];
$courseLink=$_POST['courseLink'];

$sql="INSERT INTO courses_table(courseName,courseDuration,coursePrice,courseImg,courseLink)
VALUES ('$courseName','$courseDuration','$coursePrice','$courseImg','$courseLink)";
if($conn->query($sql)===TRUE)
{
$respone['error']=false;
$respone['message']="Course added successfully";    
}
else
{
$respone['error']=true;
$respone['message']="Fail to add course..";    
}
}
else
{
$respone['error']=true;
$respone['message']="Insufficient parameters";    
}
echo json_encode($respone);
?>