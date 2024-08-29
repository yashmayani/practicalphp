<?php
include("./confing.php");
$id= $_GET['student_id'];



if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name=$_POST['name'];
    $age=$_POST['age'];
    $id=$_POST['id'];

    $students=$conn->query ("update student_auto SET name='$name',age='$age' where student_id='$id'");
    if ($students) {
        echo "students update successful";
        header ("Location:delete.php");
        }   

    else {
        echo "error";       
    }
}

$student=$conn->query ("select * from  student_auto where student_id='$id'")->fetch_all();

?>
<form action="update.php" method="POST">
    <input type="text" value="<?php echo $student[0][1] ?>" name="name" />
    <br/><br />
    <input type="text" value="<?php echo $student[0][2]?>" name="age" />
    <br /><br />
    <input type="hidden" value="<?php echo $student[0][0]?>" name="id" />

    <button name="update">update student data</button>
</form>
