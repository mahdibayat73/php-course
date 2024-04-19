<?php 

echo "<h1>Change Value</h1>";
echo "<p>To Change the value of an array item, use the key name.</p>";
echo "<p>Change the year item:</p>";

$car = ["brand" => "Pursche", "model" => "GTS", "year" => 2024];
$car ["year"] = 1818;
echo "<pre>";
print_r($car);
echo "</pre>";