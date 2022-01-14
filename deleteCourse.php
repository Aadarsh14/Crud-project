<?php


$servername = "localhost";
$username = "id18274157_courses_database_username";
$password = "7}BKcb35{T]~|{5h";
$dbname = "id18274157_courses_database";

$conn = new mysqli($servername,$username,$password,$dbname);
$respone =array();

if($_POST['id'])
{
$id=$_POST['id'];

$query="DELETE FROM courses_table where id=$id";

if($conn->query($query))
{
$respone['message']="Course deleted";   
}
else
{
$respone['message']="Fail to delete course";    
}
}
else
{
$respone['error']=true;
$respone['message']="Insufficient parameters";    
}

echo json_encode($respone);

?>