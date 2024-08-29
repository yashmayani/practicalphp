<?php
  
  $a=45;
  $b=5;
    // arithmetic operator
  echo  "for a + b ,the result is"   . ( $a + $b) ."<br>";
  echo  "for a - b ,the result is" .($a - $b)  ."<br>";
  echo  "for a * b ,the result is" .(  $a * $b) ."<br>";
  echo  "for a / b ,the result is" .($a / $b)  ."<br>";
  echo  "for a % b ,the result is" .(  $a % $b) ."<br>";
  echo  "for a ** b ,the result is" .($a ** $b)  ."<br>";

// assignment operator
$x=$a;

echo  "for x ,the value is=" .($x) ."<br>"   ;

$a +=8;
echo  "for x,the result is" .($a) ."<br>";
$a -=8;
echo  "for x,the result is" .($a) ."<br>";
$a *=8;
echo  "for x,the result is" .($a) ."<br>";
$a /=8;
echo  "for x,the result is" .($a) ."<br>";
$a %=8;
echo  "for ,the result is" .($a) ."<br>";


// comparison operator

$x=7;
$y=4;
 echo "for  x==y, the result is";
 echo var_dump($x >= $y);
 echo "<br>";



//  logical operator

$m=false    ;
$n=true;
     
     echo "for m and y, the result is";
     echo var_dump(!$m);
     echo "<br>";

?>