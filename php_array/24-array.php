<?php 

echo "<h1>Associative Arrays</h1>";
echo "<p>To add items to an associative array, or key/value array, use brackets <strong>[]</strong> for the key, and assign value with the <strong>=</strong> operator.</p>";

$car = ["brand" => "Pursche", "model" => "GTS"];
$car["color"] = "Gray";
echo "<pre>"; 
print_r($car);
echo "</pre>"; 