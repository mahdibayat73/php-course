<?php 

define('FILE_NAME', 'data.txt');

$data = $_POST['data'];
if ( strlen($data) < 6 ) {
    echo "You cannot enter a word with less than 6 characters!";
    die();
}

file_put_contents(FILE_NAME, $data . PHP_EOL, FILE_APPEND);
$fileContents = file_get_contents(FILE_NAME);
echo nl2br($fileContents);