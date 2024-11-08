<?php 

class Car {
    //Properties
    public $brand;
    public $color;

    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function displayInfo() {
        echo "This car is a " .$this->color . " " . $this->brand . "<br>";
    }
}

$myCar = new Car("Pursche", "gray");

$myCar->displayInfo();