<?php 
$filePath = "dir/logs1.txt";
$fileOpen = fopen($filePath, 'r+');
for ( $i = 0; $i <= 9; $i++ ) {
    fwrite($fileOpen, "Log $i => " . date("Y-m-d h:i:s", time()) . PHP_EOL);
}
fclose($fileOpen);