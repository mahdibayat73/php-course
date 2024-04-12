<?php 

echo "<h1>PHP foreach loop</h1>";
echo "<p>The <strong>foreach</strong> loop - loops through a block of code for each element in an array or each property in an object.</p>";
echo "<p>The most common use of the <strong>foreach</strong> loop, is to loop through the items of an array.</p>";
echo "<p>Loop through the items of an indexed array:</p>";

$colors = ["red", "blue", "green", "yellow"];
foreach ( $colors as $color ) {
    echo $color . "<br>";
}