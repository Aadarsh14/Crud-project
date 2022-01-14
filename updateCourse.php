<?php

$servername = "localhost";
$username = "id18274157_courses_database_username";
$password = "7}BKcb35{T]~|{5h";
$dbname = "id18274157_courses_database";

$conn = new mysqli($servername,$username,$password,$dbname);
$respone =array();

if($_POST['id'] && $_POST['courseName'] && $_POST['courseDuration'] && $_POST['coursePrice'] && $_POST['courseImg'] && $_POST['courseLink'])
{
$id=$_POST['id'];
$courseName=$_POST['courseName'];
$courseDuration=$_POST['courseDuration'];
$coursePrice=$_POST['coursePrice'];
$courseImg=$_POST['courseImg'];
$courseLink=$_POST['courseLink'];

$sql="UPDATE courses_table SET courseName='$courseName',coursePrice='$coursePrice',courseDuration='courseDUration',
courseImg='$courseImg',courseLink='$courseLink' where id=$id";

if($conn->query($sql)===TRUE)
{
$respone['error']=false;
$respone['message']="Course updated";    
}
else
{
$respone['error']=true;
$respone['message']="Fail to update course..";    
}
}
else
{
$respone['error']=true;
$respone['message']="Insufficient parameters";    
}
echo json_encode($respone);

?>