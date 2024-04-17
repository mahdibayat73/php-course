<?php 
declare(strict_types = 1);

echo "<h1>PHP REturn Type Declarations</h1>";
echo "<p>The following example we specify the return type for the function:</p>";

function addNumbers(int $a, int $b  ) : int {
    return $a + $b;
}

echo addNumbers(3, 6);
echo gettype(addNumbers(3, 6));