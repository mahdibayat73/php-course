<?php 

echo "<h1>Using the unset Function</h1>";
echo "<p>You can also use the unset() function to delete existing array items.</p>";

$cars = ["Pursche", "BMW", "Tiba"];
unset($cars[1]);
echo "<pre>";
print_r($cars);
echo "</pre>";