<?php 
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);
var_dump($obj);
echo "<hr>";
echo $obj->Peter . '<br>';
echo $obj->Ben . '<br>';
echo $obj->Joe;