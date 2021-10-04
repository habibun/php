<?php
//Interface segregation principle Violation
abstract class Bird {
    abstract function fly();
}

class Duck extends Bird {
    function fly()
    {
        // TODO: Implement fly() method.
    }
}

class Ostrich extends Bird{
    //violation
    function fly()
    {
        // Ostrich can't fly
    }
}