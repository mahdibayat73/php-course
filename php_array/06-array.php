<?php 
$cars = array('BMW', 'BENZ', 'PORSCHE', 'TOYOTA', 'HYUNDAI');
sort($cars);

for ( $i = 0; $i < count($cars); $i++ ) {
    echo "$cars[$i] <br>";
}