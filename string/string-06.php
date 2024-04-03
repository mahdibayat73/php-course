<?php 

// The trim() removes any whitespace from the beginning or the end:

$x = " Hello World! ";

echo "<input value='" . $x . "'>";
echo "<br>";
echo "<input value='" . trim($x) . "'>";