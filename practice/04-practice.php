<?php 

// یک ماشین‌حساب ساده با جمع، تفریق، ضرب و تقسیم بنویسید.

$num1 = 3;
$num2 = 6;
$operator = "*";

if ( $operator == "+" ) {
    $result = $num1 + $num2;
} elseif ( $operator == "-" ) {
    $result = $num1 - $num2;
}elseif ( $operator == "*" ) {
    $result = $num1 * $num2;
}elseif ( $operator == "/" ) {
    if ( $num2 != 0 ) {
        $result = $num1 / $num2;
    } else {
        $result = "خطا: تقسیم بر صفر امکان‌پذیر نیست!";
    }
} else {
    $result = "عملگر نامعتبر!";
}

echo "نتیجه: " . $result;