<?php 

echo "<h1>Passing Arguments by Reference</h1>";
echo "<p>Use a pass-by-reference argunment to update a variable:</p>";

function foo(&$var) {
    $var++;
}

$a = 5;
foo($a);
echo $a;