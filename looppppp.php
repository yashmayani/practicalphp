<?php

$a= array(1,2,3,4,5);
function yes($b){
    $sum=0;
    for ($i=0; $i <=4 ; $i++) { 
        $sum=$sum+$b[$i];

    }
    echo $sum;
}
echo yes($a);


?>  