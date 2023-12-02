<?php

class Example {
    private int|float $amount;

    public function getAmount(): int|float
    {
        return $this->amount;
    }

    public function setAmount(int|float $amount)
    {
        $this->amount = $amount ?? 100;
    }
}


$ex = new Example();
$ex->setAmount(10);
$ex->setAmount(10.3);

var_dump($ex->getAmount());
