<?php 

// Multidimensional Arrays

$people = [
    [ "name" => "Mahdi", "age" => 29 ],
    [ "name" => "Ali", "age" => 12 ],
    [ "name" => "Reza", "age" => 36 ]
];

echo "<pre>";
print_r($people);
echo "</pre>";

echo "<pre>";
var_dump($people);
echo "</pre>";

echo "<hr>";
echo $people[0]["name"];

echo "<hr>";
echo count($people);

echo "<hr>";
var_dump(in_array("name", $people));
