<?php 

echo "<h1>PHP Functions - Returning values</h1>";
echo "<p>To let function return a value, use the <strong>return</strong> statement:</p>";

function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "3 + 6 = " . sum(3, 6) . "<br>";
echo "6 + 9 = " . sum(6, 9) . "<br>";
echo "9 + 9 = " . sum(9, 9) . "<br>";