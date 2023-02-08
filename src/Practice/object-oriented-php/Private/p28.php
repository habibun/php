<?php
class Car {
    private $NumberOfDoors;
    public function __construct() {
        $this->NumberOfDoors = 4;
        echo $this->NumberOfDoors;
    }
}
// instantiate
$car= new Car();
// show the property - not allowed
?>