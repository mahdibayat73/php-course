<?php 

echo "<h1>PHP GLOBALS</h1>";
echo "<p><strong>GLOBALS</strong> is an array that contains all global variables.</p>";
echo "<p>Refer to the global variable x inside a function:</p>";

$x = 99;

function myFunction() {
    echo $GLOBALS['x'];
}

myFunction();