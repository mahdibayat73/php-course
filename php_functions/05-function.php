<?php 

echo "<h1>PHP Function Arguments</h1>";
echo "<p>The following example has a function with two arguments (fname, year) :</p>";

function familyName($fname, $year) {
    echo "$fname Bayat, Born in $year <br>";
}

familyName("Mahdi", 1373);
familyName("Haniyeh", 1380);