<?php 
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);
var_dump($arr);
echo "<hr>";
echo "Peter age is: " . $arr["Peter"] . "<br>";
echo "Ben age is: " . $arr["Ben"] . "<br>";
echo "Joe age is: " . $arr["Joe"];