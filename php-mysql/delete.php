<?php
include("./confing.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id=$_POST['delete'];
  
    $students=$conn->query ("delete from student_auto where student_id=$id");
    if($students){
        header ("Location:delete.php");
    }else{
        echo "something went wrong";
    }
}

$students=$conn->query ("select * from student_auto")->fetch_all();




echo "<br>";
echo  "<table border='1'>";


   
for ($i=0; $i <count($students) ; $i++) { 
echo "<tr> 
<td>". $students[$i][1]. " </td>
 <td>". $students[$i][2]. " </td>
 <td><form method='POST'>
 <button name='delete' value=".$students[$i][0].">delete</buttton>
 </form></td>    
 <td><a href='update.php?student_id=".$students[$i][0]."'>edit</a> </td>    
 </tr>";
}

echo "<table>";

?>


