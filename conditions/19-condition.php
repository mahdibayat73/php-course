<?php 

echo "<h1>PHP Nested if Statement</h1>";
echo "<p>You can have if statements inside if statement, this is called nested if statements.</p>";

$a = 18;
echo "Variable a = $a";
echo "<br>";

if ( $a < 36 ) {
    echo "Above 9 ";
    if ( $a > 72 ) {
        echo "and also above 72";
    }else {
        echo "But not above 72";
    }
}