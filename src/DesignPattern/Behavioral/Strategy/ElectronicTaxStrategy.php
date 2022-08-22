<?php

namespace Php\DesignPattern\Behavioral\Strategy;

class ElectronicTaxStrategy implements TaxCalculatorStrategy
{
    const TAX_RATE = 40.0;

    public function calculate(Product $product): float
    {
        return $product->getPrice() * (self::TAX_RATE / 100);
    }
}

