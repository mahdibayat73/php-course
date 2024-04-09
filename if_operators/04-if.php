<?php 

echo "<h1>The <> Operator</h1>";
echo "<p>Compare two variables and write a message if they don't have the same value.</p>";

$x = 3;
$y = 6;

if ( $x <> $y  ) {
    echo "$x is not equal to $y";
}