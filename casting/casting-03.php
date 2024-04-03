<?php 

// When converting into arrays, most data types converts into an indexed array with one element.
// NULL values converts to an empty array object.
// Objects converts into associative arrays where the property names becomes the keys and the property values become the values:

# Converting Objects into Arrays:

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("gray", "pursche");

$myCar = (array) $myCar;
echo "<pre>";
var_dump($myCar);
echo "</pre>";