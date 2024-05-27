<?php 

$x = 10;
$arr = [];
while ($x < 20):
    $x++;
    if ($x%2):
        $arr[] = $x;
    endif;
endwhile;

echo implode(",", $arr);