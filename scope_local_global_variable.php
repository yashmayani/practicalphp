<?php


echo"welcome to  scope,local /global variable<br>";

 $a=87;
 $b=31;

 function yes(){
        $a=45;
        $b=42;

      echo "<br>the value of the variable a is $a  b is $b";
 }


 
 echo $a;
 echo "<br>";
 echo $b;
 

    yes();
    echo "<br>The value of the variable a is $a b is $b";
    echo "<br>";


    echo var_dump($GLOBALS["a"]);
    echo  var_dump($GLOBALS["b"]);


?>