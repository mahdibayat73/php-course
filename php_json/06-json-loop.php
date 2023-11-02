<?php 
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj,true);

foreach ( $arr as $key => $value ) {
    echo $key . " age is: " . $value . "<br>";
}