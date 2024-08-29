<?php
include("./confing.php");

echo "<br>";
$students=$conn->query ("select * from  student_auto")->fetch_all();
print_r ($students);
echo "<br>";

echo "<table border='1'>";
for ($i=0; $i <count($students) ; $i++) { 

    
    echo $students[$i][1];
     echo "<br>";
      echo "<tr>
           <td>" . $students[$i][1] . "<td>
           <td>" . $students[$i][2] . "<td>
           </tr>";

    
}


echo "<table>";

?>