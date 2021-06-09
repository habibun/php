<?php
//Liskov substitution principle
interface Calculation
{
    public function sum(int $a, int $b) : int;
}

class A implements Calculation
{
    public function sum(int $a, int $b): int
    {
        return $a + $b;
    }
}

$a = new A();
echo $a->sum(5, 5);