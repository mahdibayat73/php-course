<?php 

echo "<h1>Loop through an Associative Array:</h1>";

function myFunction() {
    return "I come from a function!";
}

$myArr = ["car" => "Pursche", "age" => 18, "message" => myFunction()];

foreach ( $myArr as $key => $val ) {
    echo $key . ": " . $val . "<br>";
}