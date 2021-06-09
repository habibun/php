<?php

/**
 * Interface segregation principle
 *
 * Clients should not be forced to depend upon interfaces that they do not use
 */
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