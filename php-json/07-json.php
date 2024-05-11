<?php 

echo "<h1>PHP - Looping Through the Values</h1>";
echo "<p>You can also loop through the values with a foreach() loop:</p>";
echo "<p>This example shows how to loop through the values of a PHP object:</p>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);

foreach ( $obj as $name => $value ) {
    echo "$name's age is: $value <br>";
}