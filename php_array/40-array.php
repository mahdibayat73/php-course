<?php 

// Multidimensional Arrays

$people = [
    [ "name" => "Mahdi", "age" => 29 ],
    [ "name" => "Ali", "age" => 12 ],
    [ "name" => "Reza", "age" => 36 ]
];

print_r($people);
echo "<hr>";

$names = array_column($people, "name");

echo "<pre>";
var_dump($names);
echo "</pre>";

echo "<hr>";
var_dump(in_array("Mahdi", $names));
