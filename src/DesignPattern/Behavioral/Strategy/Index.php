<?php

namespace Php\DesignPattern\Behavioral\Strategy;

$product = new Product;
$product->setName('Product Test')
    ->setCategory('electronic')
    ->setPrice(100);

switch ($product->getCategory()) {
    case 'electronics':
        $strategy = new ElectronicTaxStrategy;
        break;
    case 'food':
        $strategy = new FoodTaxStrategy;
        break;
    case 'books':
        $strategy = new TaxFreeStrategy;
        break;
    default:
        throw new \Exception('Strategy not found for this category.');
}

$context = new Context($strategy);
$context->calculateProduct($product);

echo $product->getTaxes();


