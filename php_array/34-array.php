<?php 

echo "<p>The following example sorts the elements of the numbers array in descending numerical order:</p>";

$numbers = [3, 9, 27, 18, 6, 36];
rsort($numbers);
echo "<pre>";
print_r($numbers);
echo "</pre>";