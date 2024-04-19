<?php 

echo "<h1>Loop Through an Associative Array</h1>";
echo "<p>To loop through and print all the values of an associative array, you could ues <strong>foreach</strong> loop, like this:</p>";
echo "<p>Display all array items, keys an values:</p>";

$car = ["brand" => "Pursche", "model" => "GTS", "year" => 2024];

echo "<h2>The data of the car is:</h2>";

foreach ( $car as $key => $value ) {
    echo $key . ": " . $value . "<br>";
}