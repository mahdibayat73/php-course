<?php 
declare(strict_types=1); // strict requirement
function addNumber( int $a, int $b ) {
    return $a + $b . '<br>';
}

echo addNumber(3, 6);