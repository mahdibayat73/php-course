<?php 

echo "<h1>Remove the Last Item</h1>";
echo "<p>The Array_pop() function removes the last item of an array:</p>";

$cars = ["Pursche", "Tiba", "BMW"];
array_pop($cars);
echo "<pre>";
print_r($cars);
echo "</pre>";