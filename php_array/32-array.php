<?php 

echo "<h1>Sort Array in Ascending Order - sort()</h1>";
echo "<p>The following example sorts the elements of numbers array ascending numerical order:</p>";

$numbers = [6,9,18,3,27];
sort($numbers);
foreach ($numbers as $number) {
    echo $number . " - ";
}