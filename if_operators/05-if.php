<?php 

echo "<h1>The !== Operator</h1>";
echo "<p>Compare two variables and write a message if they are NOT indentical.</p>";

$x = "99";
$y = 99;

if ( $x !== $y ) {
    echo "$x with (string-type) is not indentical to $y with (int-type)";
}