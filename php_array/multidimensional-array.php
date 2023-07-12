<?php 
echo '<h1>A multidimensional array is an array containing one or more arrays.</h1>';
$cars = array(
    array('BMW', 33, 90),
    array('Toyota', 36, 63),
    array('Porsche', 99, 118)
);
print_r($cars);
echo '<hr>';
print_r($cars[2]);
echo '<hr>';
echo $cars[2][2];
echo '<hr>';
echo '<h2>For in multidimensional array:</h2>';
for( $row = 0; $row < sizeof($cars); $row++ ) {
    // print_r($cars[$row]);
    echo '<ul>';
    for( $col = 0; $col < sizeof($cars); $col++ ) {
        echo '<li>' . $cars[$row][$col] . '</li>';
    }
    echo '</ul>';
}