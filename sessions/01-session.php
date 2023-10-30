<?php 

// Start the session
session_start();

// Set session variables
$_SESSION['name'] = 'Mahdi';
$_SESSION['favColor'] = 'Purple';
echo $_SESSION['name'];
echo '<br>';
var_dump($_SESSION);
