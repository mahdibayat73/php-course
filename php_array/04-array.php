<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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



for ( $row = 0; $row < count($cars); $row++ ) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
        for ( $col = 0; $col < count($cars[$row]); $col++ ) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }
    echo "</ul>";
}
?>
</body>

</html>