<?php

 $name=array("parth","abc","xyz","yash");
 echo  var_dump($name);
 echo "<br>";

 $name[4]=("raj");
echo var_dump($name);
echo "<br>";
 

 unset($name[0]);
 echo  var_dump($name);



?>