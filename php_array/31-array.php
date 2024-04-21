<?php 

echo "<h1>Sort Array in Ascending Order - sort()</h1>";
echo "<p>The following example sorts the elements of cars array in ascending alphabetial order:</p>";

$cars = ["Pursche", "Tiba", "BMW"];
sort($cars);
echo "<pre>";
print_r($cars);
echo "</pre>";