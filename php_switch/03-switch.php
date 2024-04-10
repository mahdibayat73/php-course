<?php 

echo "<h1>PHP Switch</h1>";
echo "<p>PHP switch statement is used to execute one statement from multiple conditions. it works like PHP if-else-if statement.</p>";
echo "<strong>PHP Switch Example:</strong>";
echo "<br>";
echo "<br>";

$num = 36;

switch ( $num ) {
    case 3:
        echo "Number is equals to 3";
    break;
    case 6:
        echo "Number is equals to 6";
    break;
    case 9:
        echo "Number is equals to 9";
    break;
    case 18:
        echo "Number is equals to 18";
    break;
    case 36:
        echo "Number is equals to 36";
    break;
    default:
        echo "Something went wrong!";
}