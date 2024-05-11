<?php 

echo "<h1>PHP - json_decode()</h1>";
echo "<p>The json_decode() function is used to decode a JSON object into a PHP object or an associative array.</p>";
echo "<p>This example decodes JSON data into a PHP object:</p>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
echo "<pre>";
var_dump(json_decode($jsonobj));
echo "</pre>";