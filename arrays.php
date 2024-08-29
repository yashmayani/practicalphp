<?php

$a = array("parth","abc","xyz","yash","prince");
  $a[5]=("raj");

echo var_dump($a); 
echo "<br>"; 


unset ($a[1]);
echo var_dump($a);

echo $a[2];
echo "<br>";
echo $a[4];
echo "<br>";
 

$arraylength=count($a);
echo $arraylength;
echo "<br>";

echo "<ol>";

for ($i=0; $i <$arraylength ; $i++) { 
    echo "<li>" .$a[$i] ."</li>";
    

}
echo "</ol>";

?>

<!-- $a=array([1,2,3],[4,5,6],[7,8,9,10]);
  for ($i=0; $i <count($a) ; $i++) { 

    for ($j=0; $j <count($a[$i]) ; $j++) { 
        echo $a[$i][$j];
        echo "<br>";
    }


    
   
    

      
  } -->
   