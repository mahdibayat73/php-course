<?php 

echo "<h1>PHP Function Arguments</h1>";
echo "<p>Information can be passed to functions through arguments. An argument is just like a variable.</p>";

function familyName($fname) {
    echo "$fname Bayat <br>";
}

familyName("Mahdi");
familyName("Haniyeh");