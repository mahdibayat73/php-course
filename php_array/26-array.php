<?php 

echo "<h1>Add Multiple Items to Associative Arrays</h1>";
echo "<p>To add multiple items to an existing array, you can use the <strong>+=</strong> operator.</p>";
echo "<p>Add two items to the car Array:</p>";

$car = ["brand" => "Pursche", "model" => "GTS"];
$car += ["color" => "Gray", "year" => 1818];
echo "<pre>";
print_r($car);
echo "</pre>";