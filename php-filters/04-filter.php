<?php 

echo "<h1>PHP Filters Advanced</h1>";
echo "<p>Validate an Integer Within a Range</p>";

$int = 118;
$min = 1;
$max = 200;

if ( filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false ) {
    echo "Variable value is not within the legal range.";
} else {
    echo "Variable value is within the legal range.";
}