<?php 
class Books {
    #Member Variables
    var $price;
    var $title;
    #Member Functions
    function set_price($price) {
        $this->price = $price;
    }
    function get_price() {
        return $this->price;
    }
    function set_title($title) {
        $this->title = $title;
    }
    function get_title() {
        return $this->title;
    }
}

//Create Books Object 
$physics = new Books;
$math = new Books;
$chemistry = new Books;

//Set Title and Price
#Physics
$physics->set_title("Physics for High School");
$physics->set_price(9);
#Math
$math->set_title("Algebra");
$math->set_price(6);
#Chemistry
$chemistry->set_title("Advanced Chemistry");
$chemistry->set_price(3);

//Get Title and Price
echo $physics->get_title() . " is: $". $physics->get_price() . "<br>";
echo $math->get_title() . " is: $". $math->get_price() . "<br>";
echo $chemistry->get_title() . " is: $". $chemistry->get_price() . "<br>";




