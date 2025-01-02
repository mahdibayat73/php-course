<?php 

class Car {
    //Properties
    public $brand;
    public $color;

    public function __construct( $brand = "Unknown", $color = "White" ) {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function displayInfo() {
        echo "This car is a " . $this->color . " " . $this->brand . "<br>";
    }
}

$defaultCar = new Car();
$defaultCar->displayInfo();

$customCar = new Car("Mazda", "R~ed");
$customCar->displayInfo();