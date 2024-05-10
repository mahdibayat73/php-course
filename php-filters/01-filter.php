<?php 

echo "<h1>PHP Filter_var() Function</h1>";
echo "<p>The <strong>filter_var()</strong> function both validate and sanitize data.</p>";
echo "<h2>Sanitize a String:</h2>";
echo "<p>The following example uses the filter_var() function to remove all HTML tags from a string:</p>";

$str = "<h3>Hello World!</h3>";
$newStr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newStr;