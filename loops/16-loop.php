<?php 

echo "<h1>Alternative Syntax</h1>";
echo "<p>The <strang>foreach</strang> loop syntax can also written with the <strong>endforeach</strong> statement like this:</p>";

$colors = ["Red", "Blue", "Purple", "Green"];

foreach ( $colors as $color ) :
    echo "$color <br>";
endforeach;