<?php 
# Associative Arrays

$age = array( 'Mahdi' => 28, 'Javad' => 24, 'Haniyeh' => '22'  );
echo "Mahdi is " . $age['Mahdi'] . "years old.";
echo '<hr>';

foreach ( $age as $key => $val ) {
    echo "key is: " .  $key . " value is: " . $val . "<br>";
}