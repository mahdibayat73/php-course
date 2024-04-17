<?php 

echo "<h1>Passing Arguments by Reference</h1>";
echo "<p>Use a pass-by-reference argunment to update a variable:</p>";

function add_five(&$value) {
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;