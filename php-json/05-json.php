<?php 

echo "<h1>PHP - Accessing the Decoded Values</h1>";
echo "<p>This example shows how to access the values from a PHP object:</p>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);

echo "Peter's age is: " . $obj->Peter . "<br>";
echo "Ben's age is: " . $obj->Ben . "<br>";
echo "Joe's age is: " . $obj->Joe . "<br>";