<?php 

function changeValueRef(&$num) {
    $num = 20;
}

$number = 10;
changeValueRef($number);
echo $number; // خروجی: 20
