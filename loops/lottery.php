<?php 

if (isset($_POST["submit"])) {
    $i = 1;
    $counter = 45;
    while ($i < $counter) {
        if ($_POST["box-$i"] > 0) {
            echo $_POST["box-$i"] . "<br>";
        }
        $i++;
    }
}