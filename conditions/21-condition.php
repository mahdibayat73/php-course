<?php 

$score = 75;

$result = ($score >= 90) ? "عالی" : 
          (($score >= 75) ? "نیاز به تلاش بیشتری دارید!" : "خوب" );
echo $result;