<?php
//example 1
$product = new Product();
    $product-> setTitle(new Title('Mobile Phone'));
    $product-> setPrice(new Price('1000'));
    $this->em->persist($product);
    $this->em->flush();

//example 2
$product = Product::add(
    new Title('Mobile Phone'),
    new Price('1000')
);

//In a development team, if someone creates a product and someone else adds a product, this will violate ubiquitous language.