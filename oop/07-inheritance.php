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

    // public function __construct($par1, $par2)
    // {
    //     $this->title = $par1;
    //     $this->price = $par2;
    // }
}

class Novel extends Books {
    public $publisher;
    public function setPublisher($par){
        $this->publisher = $par;
    }
    public function getPublisher() {
        return $this->publisher;
    }

}

$novelOne = new Novel;
echo $novelOne->title . " and the price is: " . $novelOne->price . "<br>";
$novelOne->setPublisher("Mahdi Bayat");
echo $novelOne->getPublisher();