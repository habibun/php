<?php

namespace Php\DesignPattern\Behavioral\Strategy;

use TaxCalculatorStrategy;

class FoodTaxStrategy implements TaxCalculatorStrategy
{
    const TAX_RATE = 30.0;

    public function calculate(Product $product): float
    {
        return $product->getPrice() * (self::TAX_RATE / 100);
    }
}

