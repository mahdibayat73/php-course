<?php 

// When converting into objects, most data types converts into a object with one property, named "scalar", with the corresponding value.
// Null values converts to an empty object.
// Indexed arrays converts into objects with the index number as property name and the value as property value.
// Associative arrays converts into objects with the keys as property names and values as property values.

#Converting Arrays into Objects:

$a = array("Volvo", "BMW", "Pursche"); // indexed array
$b = array("Mahdi" => 29, "Haniyeh" => 22, "Gholy" => 99); // associative array

$a = (object) $a;
$b = (object) $b;

echo "<pre>";
var_dump($a);
var_dump($b);
echo "</pre>";