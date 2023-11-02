<?php 
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);

foreach ( $obj as $key => $value ) {
    echo $key . " age is: " . $value . "<br>";
}