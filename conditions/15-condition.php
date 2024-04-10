<?php 

echo "<h1>PHP - The if...else Statement</h1>";
echo "<p>The <strong>if...else</strong> statement executes some code if a condition is true and another if that condition is false.</p>";

date_default_timezone_set("Asia/Tehran");
$t = date("H");
echo $t;
echo "<hr>";
echo date('H:i:s');
echo "<hr>";

if ( $t < 20 ) {
    echo "Have a good day!";
}else {
    echo "Have a good night!";
}