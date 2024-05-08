<?php 

echo "<h1>PHP Append Text</h1>";
$myFile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myFile, $txt);
$txt = "Goofy Goof\n";
fwrite($myFile, $txt);
fclose($myFile);