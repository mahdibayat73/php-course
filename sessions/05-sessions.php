<?php 

session_start();

// Set session variables
$_SESSION["name"] = "Mahdi";
$_SESSION["favColor"] = "purple";

echo "Session variables are set.";