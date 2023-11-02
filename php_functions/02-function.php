<?php 
//List

$date = array("2023-11-01", "03:54:16");
print_r($date);
echo "<hr>";
print_r(list($todayDate, $time) = $date);
echo "<hr>";
echo $todayDate;
echo "<hr>";
echo $time;