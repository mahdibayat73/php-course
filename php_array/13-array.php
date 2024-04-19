<?php 

echo "<h1>Change Value</h1>";
echo "<p>To change the value of an array item, use the index number.</p>";

$cars = ["Pursche", "Tiba", "BMW"];
$cars[2] = "Toyota";
echo "<pre>";
var_dump($cars);
echo "</pre>";