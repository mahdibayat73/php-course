<?php 
$x = 6; // global scope

function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}

myTest();
echo "<p>Variable x outside function is: $x</p>";

echo "<hr>";

function myTest1() {
    $y = 9;
    echo "<p>Variable y inside function is: $y</p>";
}
myTest1();

// using x outside the function will generate an error
echo "<p>Variable y outside function is: $y</p>";