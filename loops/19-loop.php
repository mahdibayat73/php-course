<?php 

$counter = 0;

while ($counter < 10) :
    $counter++;
    
    if ($counter > 8) :
        echo "Counter is larger than 8, stopping the loop. <br>";
        break;
    endif;

    if ($counter % 2 == 0) :
        echo "Skipping number $counter because it's even. <br>";
        continue;
    endif;

    echo "Executing - counter is $counter. <br>";

endwhile;