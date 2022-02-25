<?php 
// Defining a class
class Knife {
    public $length, $width, $edge, $material;
}

// Creating a new instance of a class, a new object
$KaBar = new Knife();

// Setting the object properties
$KaBar -> edge = "straight";

class Plant {
    public $name, $latin_name, $soil, $water, $temperature;
    function getInfo() {
        return "This plant grows best in " . $this -> soil . " soil at " . $this -> temperature . " and watering " . $this -> water . ".";
    }
}
// instantiate a new plant with attributes
$tomato = new Plant();
$tomato -> soil = "acidic";
$tomato -> temperature = "40 degrees F";
$tomato -> water = "once per day";

// print the result of the plant function getInfo
echo $tomato->getInfo();

// Constructor Methods
class Bag {
    public $size, $color, $material;
    // public, protected, private
    function __construct($size, $color, $material) {
        $this -> size = $size;
        $this -> color = $color;
        $this -> material = $material;
    }

    function type() {
        return "bag";
    }
}

// creates a bag object that is small and pink and made of canvas
$kaban = new Bag("small", "pink", "canvas");

// Create a new class based on a parent class
class Backpack extends Bag {
    function type() {
        return "backpack";
    }

    function classify() {
        echo "This" . parent::type() . " is a " . $this->type . ".";
    }
}

class Paint {
    private $color, $type;
    // Getters and Setters
    function setColor($color) {
        $this -> color = $color;
    }
    function getColor() {
        return $this->color;
    }

    function setType($type) {
        $this -> type = $type;
    }
    function getType() {
        return $this->type;
    }
}