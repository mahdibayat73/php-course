<?php 

// ✅ تابعی بنویسید که سه عدد را دریافت کند و بزرگ‌ترین عدد را برگرداند.

function max_number( $num1, $num2, $num3 ) {
    if ( $num1 >= $num2 && $num1 >= $num3 ) {
        return $num1;
    } elseif ( $num2 >= $num1 && $num2 >= $num3 ) {
        return $num2;
    } else {
        return $num3;
    }
}

echo max_number(18, 66, 9);
echo "<hr>";
echo max_number(-1, -5, -3);   // خروجی: -1