<?php 

$students = [
    ["name" => "مهدی", "score" => 85],
    ["name" => "علی", "score" => 92],
    ["name" => "سارا", "score" => 78],
];

// چاپ اسامی دانش‌آموزانی که نمره بالای 80 دارند

foreach ($students as $student) {
    if ( $student["score"] > 80 ) {
        echo $student["name"] . " نمره عالی گرفته است. <br>";
    }
}