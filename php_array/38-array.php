<?php 

// Associative Array

$person = [
    "name" => "Mahdi",
    "age" => 29,
    "city" => "Tehran"
];

echo $person["name"];
echo "<br>";

echo "<pre>";
print_r($person);
echo "</pre>";

echo "<pre>";
var_dump($person);
echo "</pre>";