<?php 

echo "<h1>Sort Array in Descending Order - rsort()</h1>";
echo "<p>The following example sorts the elements of the cars array in descending alphabetical order:</p>";

$cars = ["Pursche", "Tiba", "BMW"];
rsort($cars);
echo "<pre>";
print_r($cars);
echo "</pre>";