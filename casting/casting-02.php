<?php 

// Casting to string

$a = 5; //String
$b = 5.34; //Float
$c = "Hello"; //String
$d = true; //Boolean
$e = NULL; //NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";