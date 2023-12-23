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
}

$apple = new Friut();
$apple->set_name('Apple');
echo $apple->getname();