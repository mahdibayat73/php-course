<?php 

session_start();

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

// Echo session variables that were set on previous page
echo "User name is: " . $_SESSION["name"] . ".<br>" ;
echo "Favorite color is: " . $_SESSION["favColor"] . "." ;