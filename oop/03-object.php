<?php 
class Friut {
    #Properties
    public $name;
    public $color;
    //Method 
    function set_name($name) {
        $this->name = $name;
    }
    function getname() {
        return $this->name;
    }
    function set_color($color) {
        $this->color = $color;
    }
    function get_color() {
        return $this->color;
    }
}

$apple = new Friut();
$apple->set_name('Apple');
echo $apple->getname();
echo "<br>";
$apple->set_color("Red");
echo $apple->get_color();