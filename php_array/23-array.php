<?php 

echo "<h1>PHP Add Array Items</h1>";
echo "<p>To add items to an existing array, you can use the bracket [] syntax.</p>";
echo "<p>Add one more item to the <strong>fruits</strong> array:</p>";

$fruits = ["Banana", "Apple", "Cherry"];
$fruits[] = "Orange";
echo "<pre>";
print_r($fruits);
echo "</pre>";