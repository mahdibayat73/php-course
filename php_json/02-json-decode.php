<?php 
// Json Decode

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj));
echo "<hr>";

var_dump(json_decode($jsonobj, true));