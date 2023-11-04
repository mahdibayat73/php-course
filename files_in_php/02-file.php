<?php 
$filePath = "dir/logs.txt";
$fileOpen = fopen($filePath, 'a+');
for ( $i = 0; $i <= 9; $i++ ) {
    fwrite($fileOpen, "Log $i => " . date("Y-m-d h:i:s", time()) . PHP_EOL);
}
fclose($fileOpen);