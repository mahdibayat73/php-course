<?php 

echo "<h1>Excecute a Function Item</h1>";
echo "<p>Array items can be of any data type, including function.</p>";
echo "<p>To execute such a function, use the index number followed by parentheses ():</p>";

function myFunction() {
    echo "I come from a function!";
}

$myArr = array("Pursche", 18, myFunction());

$myArr[2];