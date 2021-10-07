<?php

namespace Php\DesignPrinciple\Dry;

interface Product
{
    public function displayPrice();
}

class PlasticDuck implements Product{
    /** @var int */
    private $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function displayPrice()
    {
        echo sprintf("The price of this plastic duck is %d euros!", $this->price);
    }
}

class CsvValidation
{
    public function validateProduct(array $product)
    {
        if (!isset($product['color'])) {
            throw new \Exception('Import fail: the product attribute color is missing');
        }

        if (!isset($product['size'])) {
            throw new \Exception('Import fail: the product attribute size is missing');
        }

        if (!isset($product['type'])) {
            throw new \Exception('Import fail: the product attribute type is missing');
        }
    }
}

class CsvValidationImprovement
{
    private $productAttributes = [
        'color',
        'size',
        'type',
    ];

    public function validateProduct(array $product)
    {
        foreach ($this->productAttributes as $attribute) {
            if (!isset($product[$attribute])) {
                throw new \Exception(sprintf('Import fail: the product attribute %s is missing', $attribute));
            }
        }
    }
}
