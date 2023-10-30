<?php 
declare( strict_types=1 );

function sum( int $a, int $b ) {
    $z = $a + $b;
    return $z;
}

echo "3 + 6 = " . sum(3, 6) . "<br>";
echo "9 + 9 = " . sum(9, 9) . "<br>";
echo "0 + 18 = " . sum(0, 18) . "<br>";