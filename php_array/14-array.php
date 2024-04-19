<?php 

echo "<h1>Loop Through an Indexed Array</h1>";
echo "<p>To loop through and print all the value of an indexed array, you could use a <strong>foreach</strong> loop, like this:</p>";

$cars = ["Pursche", "Tiba", "BMW"];

foreach ( $cars as $car ) {
    echo $car . "<br>";
}