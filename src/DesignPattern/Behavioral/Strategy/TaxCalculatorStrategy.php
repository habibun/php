<?php

namespace Php\DesignPattern\Behavioral\Strategy;

interface TaxCalculatorStrategy
{
    public function calculate(Product $product): float;
}
