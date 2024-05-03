<?php 

echo "<h1>Get Your Time Zone</h1>";
date_default_timezone_set("asia/tehran");
echo "The time is: " . date("h:i:sa");