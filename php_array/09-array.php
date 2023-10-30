<?php 
$age = array( 'Mahdi' => 12, 'Javad' => 24, 'Haniyeh' => 32  );
ksort($age);

foreach ( $age as $key => $val ) {
    echo "My name is: " . $key . " and my age is: " . $val . "<br>";
}