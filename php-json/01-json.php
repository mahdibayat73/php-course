<?php 

echo "<h1>PHP and JSON</h1>";
echo "<h2>PHP - json_encode()</h2>";

$age = ["Peter" => 35, "Ben" => 37, "Joe" => 43];
echo json_encode($age);