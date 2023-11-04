<?php 
$file = fopen("dir/test.txt","w");
fwrite($file,"Hello World. Testing!");
fclose($file);