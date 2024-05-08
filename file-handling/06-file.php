<?php 

echo "<h1>PHP Write to File - fwrite()</h1>";
$myFile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mahdi Bayat\n";
fwrite($myFile, $txt);
$txt = "Mahdi Bayat\n";
fwrite($myFile, $txt);
fclose($myFile);