<?php 

echo "<h1>Variable Number of Arguments</h1>";
echo "<p>A function that don't know how many arguments it will get:</p>";

function sumMyNumbers(...$x) {
    $n = 0;
    $len = count($x);
    for ( $i = 0; $i < $len; $i++ ) {
        $n += $x[$i];
    }
    return $n;
}

$a = sumMyNumbers(3,6,9,18);
echo $a;