<?php 

echo "<h1>PHP GLOBALS</h1>";
echo "<p>Define x as global inside a function:</p>";

$x = 18;

function myFunction() {
    global $x;
    echo $x;
}

myFunction();