<?php 
declare(strict_types=1);

function setHight( int $minHeight = 18 ) {
    return "The height is: $minHeight <br>";
}

echo setHight();
echo setHight(360);
echo setHight('360');
