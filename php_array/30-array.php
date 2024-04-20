<?php 

echo "<h1>Remove the First Item</h1>";
echo "<p>The array_shift() function removes the first item of an array:</p>";

$cars = ["BMW", "Tiba", "Pursche"];
array_shift($cars);
echo "<pre>";
print_r($cars);
echo "</pre>";