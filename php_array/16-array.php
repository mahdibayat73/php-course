<?php 

echo "<h1>Access Associative Arrays</h1>";
echo "<p>To access an array item you can refer to the key name</p>";
echo "<p>Display the model of the car:</p>";

$car = ["brand" => "Pursche", "model" => "GTS", "year" => 2024];

echo "The model of the Pursche is: " . $car["model"];