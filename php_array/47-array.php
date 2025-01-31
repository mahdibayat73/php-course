<?php 

// ✅ ۲. تبدیل آرایه به یک لیست HTML

$names = ["Mahdi", "Reza", "Firoozeh", "Haniyeh", "Maryam"];

echo "<ul>";
foreach ( $names as $name ) {
    echo "<li>{$name}</li>";
}
echo "</ul>";