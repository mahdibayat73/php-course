<?php 

// ✅ یک آرایه از سن هر فرد بسازید و به همراه نام، سن او را در خروجی چاپ کنید.

$people = ["Mahdi" => 29, "Firoozeh" => 24, "Haniyeh" => 23, "Maryam" => 43];

echo "<ul style='direction: rtl; text-align: right;'>";
foreach ( $people as $name => $age ) {
    echo "<li>{$name} عزیز، سن شما <strong>{$age}</strong> است.</li>";
}
echo "</ul>";