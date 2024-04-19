<?php 

echo "<p>Use the key name when the function is an item in a associative array:</p>";
echo "<p>Execute function by referring to the key name:</p>";

function myFunction() {
    echo "I come from a function!";
}

$myArr = ["car" => "Pursche", "age" => 18, "message" => myFunction()];

$myArr[2];