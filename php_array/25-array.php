<?php 

echo "<h1>Add Multiple Array Items</h1>";
echo "<p>To add multiple items to an existing array, use the <strong>array_push()</strong> function.</p>";
echo "<p>Add three item to the fruits array:</p>";

$fruits = ["Banana", "Apple", "Cherry"];
array_push($fruits, "Orange", "Kiwi", "Lemon");
echo "<pre>";
print_r($fruits);
echo "</pre>";