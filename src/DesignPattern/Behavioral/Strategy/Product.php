<?php

namespace Php\DesignPattern\Behavioral\Strategy;

class Product
{
    private string $name;

    private string $category;

    private float $price;

    private float $taxes;

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): Product
    {
        $this->category = $category;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Product
    {
        $this->name = $name;
        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): Product
    {
        $this->price = $price;
        return $this;
    }

    public function getTaxes(): float
    {
        return $this->taxes;
    }

    public function setTaxes(float $taxes): Product
    {
        $this->taxes = $taxes;
        return $this;
    }
}

