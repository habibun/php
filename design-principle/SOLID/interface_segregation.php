<?php
//Interface segregation principle
abstract class Bird{
}

abstract class FlyingBirds extends Bird{
    abstract function fly();
}

class Duck extends FlyingBirds{
    function fly()
    {
        // TODO: Implement fly() method.
    }
}

class Ostrich extends Bird{

}