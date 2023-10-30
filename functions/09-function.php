<?php 
$num = 3;
function add_nine(&$num) {
    return $num += $num;
}

echo add_nine($num);
echo "<hr>";
echo $num;