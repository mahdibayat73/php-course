<?php 

echo "<h1>PHP Read Single Line - fgets</h1>";
$myFile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myFile) . "<br>";
echo fgets($myFile);
fclose($myFile);