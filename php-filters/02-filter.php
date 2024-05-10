<?php 

echo "<h1>Validate an Integer</h1>";

$int = 99;

if ( !filter_var($int, FILTER_VALIDATE_INT) === false ) {
    echo "Integer is valid.";
} else {
    echo "Integer is not valid.";
}