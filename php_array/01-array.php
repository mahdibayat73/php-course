<?php 
// indexd array

$cars = array('BMW', 'BENZ', 'PORSCHE', 'TOYOTA', 'HYUNDAI');
echo count($cars);
echo "<hr>";
for ( $i = 0; $i < count($cars); $i++ ) {
    echo "$cars[$i] <br>";
}