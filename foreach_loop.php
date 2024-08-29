
<?php
 echo "welcome to the world of foreach loops<br>";

 $arr=array("apple","banana","milk","butter","bread");

// foreach ($arr as  $value) {
//     echo " $value<br>";
// }
   
for ($i=0; $i <count($arr); $i++) { 
      echo $arr[$i];
    //   echo $i;
      echo "<br>";
}



?>