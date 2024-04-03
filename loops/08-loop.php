<?php 

// foreach 

#indexed array
$programmingLanguages = ['php', 'java', 'c++', 'go', 'rust'];

foreach ( $programmingLanguages as $language ) {
    echo $language . ", ";
}

echo "<hr>";

#associative array
$users = ['Mahdi' => 29, 'Haniyeh' => 22, 'Gholy' => 99];

foreach ( $users as $user => $age ) {
    echo $user . ": " . $age . "<br>";
}