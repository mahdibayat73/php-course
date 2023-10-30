<?php 
//setcookie(name, value, expire, path, domain, secure, httponly);

$cookie_name = 'user';
$cookie_value = 'Mahdi';
setcookie($cookie_name, $cookie_value, time() + 86400, '/');

if ( !isset($_COOKIE[$cookie_name]) ) {
    echo "Cookie named " . $cookie_name . "is not set!";
}else {
    echo "Cookie " . $cookie_name . "is set! <br>";
    echo "Value is " . $_COOKIE[$cookie_name];
}
echo "<br>";

var_dump($_COOKIE);
echo "<br>";
print_r($_COOKIE[$cookie_name]);