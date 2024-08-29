<?php

function calculator($a,$b,$operation){
     switch($operation){
        case 'add':
            echo ($a+$b);
            break;
        case 'divide':
            echo ($a/$b);
            break;   
        case 'mod':
           echo ($a%$b);
            break; 
        case 'sub':
           echo ($a-$b);
            break; 
        case 'multiplication':
         echo ($a*$b); 
            break;       
        default:
            echo "hello";
            break;
     }


}
calculator(55,77,"add");
echo "<br>";
calculator(55,77,"divide");
echo "<br>";
calculator(55,77,"mod");
echo "<br>";
calculator(55,77,"sub");
echo "<br>";
calculator(55,77,"multiplication");

?>