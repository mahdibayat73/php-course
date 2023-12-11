<?php
function myCalc($num01, $oper, $num02) {
    $sum;
    switch($oper) {
        case "add":
            $sum = $num01 + $num02;
        break;
        case "subtract":
            $sum = $num01 - $num02;
        break;
        default:
            $sum = "There was an error!";
    }
    return $sum;
}

$num1 = $_GET['num01'];
$oper = $_GET['oper'];
$num2 = $_GET['num02'];

echo "Value: " . myCalc($num1, $oper, $num2);