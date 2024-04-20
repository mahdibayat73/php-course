<?php 

echo "<h1>Remove Array Item</h1>";
echo "<p>To remove an existing item from an array, you can use the <strong>array_splice()</strong> function.</p>";
echo "<p>Remove the second item:</p>";

$cars = ["Pursche", "BMW", "Tiba"];
array_splice($cars, 1, 1);
echo "<pre>";
print_r($cars);
echo "</pre>";