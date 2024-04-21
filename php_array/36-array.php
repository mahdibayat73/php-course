<?php 

echo "<h1>PHP Multidimensional Arrays</h1>";
echo "<p>We can also put a for loop inside another for loop to get the elements of the cars array (we still have to point to the two indices):</p>";

$cars = [
    ["Pursche", 18, 36],
    ["Tiba", 9, 6],
    ["BMW", 6, 3],
];

$len = count($cars);

for ( $row = 0; $row < $len; $row++ ) {
    echo "<p>Row number $row</p>";
    echo "<ul>";
        for ( $col = 0; $col < $len; $col++ ) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }
    echo "</ul>";
}