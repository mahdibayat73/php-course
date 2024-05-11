<?php 

echo "<p>This example shows how to loop through the values of a PHP associative array:</p>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);

foreach ( $arr as $name => $val ) {
    echo "$name's age is: $val <br>";
}