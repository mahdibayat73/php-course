<?php 

echo "<h1>PHP Overwriting</h1>";
$myFile = fopen("newfile.txt", "w") or die("Unable to open file");
$txt = "Mickey Mouse\n";
fwrite($myFile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myFile, $txt);
fclose($myFile);