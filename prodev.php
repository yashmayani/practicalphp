<?php
function calculator($a, $b, $operation) {
    switch($operation) {
        case 'add':
            return $a + $b;
        case 'sub':
            return $a - $b;
        case 'mul':
            return $a * $b;
        case 'div':
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Cannot divide by zero!";
            }
        case 'mod':
            if ($b != 0) {
                return $a % $b;
            } else {
                return "Cannot perform modulus operation with zero!";   
            }
        default:
            return "Invalid operation!";
    }
}

// Example usage:
echo "Addition: " . calculator(55, 77, 'add') . "\n";
echo "Subtraction: " . calculator(55, 77, 'sub') . "\n";
echo "Multiplication: " . calculator(55, 77, 'mul') . "\n";
echo "Division: " . calculator(55, 77, 'div') . "\n";
echo "Modulus: " . calculator(55, 77, 'mod') . "\n";
?>