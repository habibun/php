<?php

namespace Php\DesignPattern\DecoratorPattern;

interface Booking
{
    public function calculatePrice();

    public function getDescription();
}
