<?php 

echo "<h1>PHP Multidimensional Arrays</h1>";
echo "<p>A multidimensional array is an array containing one or more arrays</p>";

$cars = [
    ["Pursche", 18, 36],
    ["Tiba", 9, 6],
    ["BMW", 6, 3],
];

echo "<pre>";
print_r($cars);
echo "</pre>";

echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", Sold: " . $cars[0][2] . "<br>";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", Sold: " . $cars[1][2] . "<br>";
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", Sold: " . $cars[2][2] . "<br>";