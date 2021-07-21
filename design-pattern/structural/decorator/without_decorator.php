<?php

interface Car {
    function cost();
    function description();
}

class Suv implements Car {
    function cost()
    {
        return 30000;
    }

    function description ()
    {
        return "Suv";
    }
}


//The problem
//The problem starts when customers are given the choice to add optional features to their car, like high end wheels, a car rear spoiler, or a sun roof.
//We wouldn't like to change the existing classes to include optional features, so we need a better solution.