<?php 

echo "<h1>Associative arrays</h1>";
echo "<p>Print both the key and the value from the array:</p>";

$members = ["Mahdi" => 29, "Haniyeh" => 22, "Javad" => 25];
foreach ( $members as $key => $val ) {
    echo "$key is: $val <br>";
}