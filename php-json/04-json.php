<?php 

echo "<p>The json_decode() function returns an object by default. The json_decode() function has a second parameter, and when set to true, JSON objects are decoded into associative arrays.</p>";
echo "<p>This example decodes JSON data into a PHP associative array:</p>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
echo "<pre>";
var_dump(json_decode($jsonobj, true));
echo "</pre>";