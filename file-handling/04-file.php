<?php 

echo "<h1>PHP Check End-Of-File - feof</h1>";
$myFile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while (!feof($myFile)) {
    echo fgets($myFile) . "<br>";
}
fclose($myFile);