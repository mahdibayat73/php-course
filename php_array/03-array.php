<?php 
// PHP Multidimensional Arrays
$cars = array(
    array('Porsche', 39, 18),
    array('BMW', 36, 33),
    array('Benz', 27, 9),
    array('Toyota', 18, 6),
    array('Hyundai', 9, 3),
    array('MVM', 45, 30),
);
echo $cars[0][2];
echo '<hr>';

foreach ( $cars as $car ) {
    foreach ( $car as $val ) {
        var_dump($val) . "<br>";
    }
}