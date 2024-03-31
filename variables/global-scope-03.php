<?php 

$x = 5; // Global scope

function myTest() {
    global $x;
    //using $x here will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}

myTest();

echo "<p>Variable x outside function is: $x</p>";
