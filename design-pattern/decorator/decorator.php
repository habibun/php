<?php

interface Car {
    function cost();
    function description();
}


abstract class CarFeature implements Car {
    protected $car;

    function __construct(Car $car)
    {
        $this->car = $car;
    }

    abstract function cost();

    abstract function description();
}

class SunRoof extends CarFeature {
    function cost ()
    {
        return $this->car->cost() + 1500;
    }

    function description()
    {
        return $this->car->description() . ",  sunroof";
    }
}

class HighEndWheels extends CarFeature {
    function cost ()
    {
        return $this->car->cost() + 2000;
    }

    function description()
    {
        return $this->car->description() . ",  high end wheels";
    }
}
