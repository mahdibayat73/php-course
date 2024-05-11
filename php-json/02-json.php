<?php 

echo "<h1>PHP and JSON</h1>";
echo "<p>This example shows how to encode an indexed array into a JSON array:</p>";

$cars = array("Volvo", "BMW", "Toyota");
echo json_encode($cars);