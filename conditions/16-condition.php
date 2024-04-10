<?php 

echo "<h1>PHP The if...elseif...else Statement</h1>";
echo "<p>The <strong>if...elseif...else</strong> statement executes different codes for more than two conditions.</p>";
echo "<p>Output \"Have a good morning!\" if the current time is less than 10, and \"Have a good day!\" if current time is less than 20. Otherwise it will output \"Have a good night!\":</p>";

date_default_timezone_set("Asia/Tehran");
$t = date("H:i:s");
echo $t;
echo "<br>";

if ( $t < 10 ) {
    echo "Have a good morning!";
}elseif ( $t < 20 ) {
    echo "Have a good day!";
}else {
    echo "Have a good night!";
}