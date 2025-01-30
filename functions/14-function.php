<?php 

// ✅ تابعی بنویسید که سه عدد را دریافت کند و بزرگ‌ترین عدد را برگرداند.

function numbers($num1, $num2, $num3) {
    return max($num1, $num2, $num3);
}

echo numbers(3,6,9);