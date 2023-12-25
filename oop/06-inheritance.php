<?php 
class Books {
    #Member Variables
    public $price;
    public $title;
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

    public function __construct($par1, $par2)
    {
        $this->title = $par1;
        $this->price = $par2;
    }
}

class Novel extends Books {

}

$novelOne = new Novel("This is my first Novle", 18);
echo $novelOne->title . " and the price is: " . $novelOne->price;