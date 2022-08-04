<?php

namespace Php\DesignPattern\Behavioral\Strategy;

class TaxFreeStrategy implements TaxCalculatorStrategy
{
    public function calculate(Product $product): float
    {
        return 0;
    }
}

