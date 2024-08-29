<?php

echo "welcome to php tutorial in functions<br>";

function yesh($i){
    $yaa=0;

    foreach ($i as $key => $value) {
        $yaa +=$value;

    }
    return $yaa;
}

$prodev=[46,46,87,98,86,86];
$summarks=yesh($prodev);

$infotech=[59,87,98,65,87,10];
$summarksyess=yesh($infotech);


echo "total marks scored by prodev out of 600  is $summarks<br>";
echo "total marks scored by infotech out of 600 is $summarksyess";

?>
<!-- -------------------sam to sam------------- -->
<!-- <?php

echo "welcome to php tutorials on functions<br>";

function  yash($i){
    $sum =0;
    foreach ($i as $key => $value) {
        $sum += $value;
    }
    return $sum;
}

$rohandas=[35,35,75,33,76,88];
$summarks= yash($rohandas);

$harry=[64,78,32,67,43,67];
$summarksharry =yash($harry);



echo "total marks scored by rohan out of 600 is  $summarks  <br>";
echo "total marks scored by harry out of 600 is   $summarksharry <br>";

?> -->
