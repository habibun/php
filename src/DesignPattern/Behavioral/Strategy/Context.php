<?php

namespace Php\DesignPattern\Behavioral\Strategy;

class Context
{
    private TaxCalculatorStrategy $taxCalculatorStrategy;

    public function __construct(TaxCalculatorStrategy $taxCalculatorStrategy)
    {
        $this->taxCalculatorStrategy = $taxCalculatorStrategy;
    }

    public function calculateProduct(Product $product): void
    {
        $taxes = $this->taxCalculatorStrategy->calculate($product);

        $product->setTaxes($taxes);
    }
}

