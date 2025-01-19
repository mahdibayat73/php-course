<?php 

function calculateRemainder($a, $b) {
    $sum = $a + $b;
    $remainder = $sum % $a;
    echo "جمع: " . $sum . "<br>";
    echo "باقی مانده: " . $remainder;
}

calculateRemainder(3, 6);