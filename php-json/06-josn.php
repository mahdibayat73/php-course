<?php 

echo "<p>This example shows how to access the values from a PHP associative array:</p>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);

echo "Peter's age is: " . $arr["Peter"] . "<br>";
echo "Ben's age is: " . $arr["Ben"] . "<br>";
echo "Joe's age is: " . $arr["Joe"] . "<br>";