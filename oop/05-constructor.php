<?php 
class Books {
    public $title;
    public $price;

    function __construct($par1, $par2) {
        $this->title = $par1;
        $this->price = $par2;
    }
}

$math = new Books("This is Math", 9);
print_r($math);
echo "<br>";
echo $math->title . " " . " the price is: " . $math->price;