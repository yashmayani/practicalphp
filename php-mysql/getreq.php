<?php
include("./confing.php");

if($_SERVER['REQUEST_METHOD'] == 'GET') {

  $name=$_GET['name'];
  $age=$_GET['age'];

$students=$conn->query ("insert into student_auto (name,age)values('$name','$age')");


if ($students) {
  echo "inserted succsessfully";
  header("Location: practice.php");

} else {
  echo "something went wrong";
}
}



?>

