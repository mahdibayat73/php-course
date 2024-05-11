<?php 

echo "<h1>Callback Functions</h1>";

function my_callback($item){
    return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);