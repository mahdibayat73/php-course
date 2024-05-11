<?php 

echo "<h1>Callback Function</h1>";

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map(function($items) { return strlen($items); }, $strings );
echo "<pre>";
print_r($lengths);
echo "</pre>";