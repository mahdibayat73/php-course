<?php 
// Json Encod

$age = array("Mahdi" => 28, "Javad" => 24, "Haniyeh" => 22);
echo json_encode($age);
echo "<hr>";
var_dump(json_encode($age));
echo "<hr>";
$cars = array("Porsche", "BMW", "BENZ");
echo json_encode($cars, JSON_FORCE_OBJECT);
echo "<hr>";
var_dump(json_encode($cars, JSON_FORCE_OBJECT));
echo "<hr>";
var_dump(json_encode($cars));