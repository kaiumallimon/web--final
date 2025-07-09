<?php
// OOP basics in PHP
class Car {
    public $brand;
    public function __construct($brand) {
        $this->brand = $brand;
    }
    public function honk() {
        return "Beep! I am a $this->brand.";
    }
}
$myCar = new Car("Toyota");
echo $myCar->honk(); 