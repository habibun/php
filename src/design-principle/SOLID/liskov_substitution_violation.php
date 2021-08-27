<?php
// Liskov substitution principle violation
interface Calculation
{
    public function sum(int $a, int $b) : int;
}

class A implements Calculation
{
    public function sum(int $a, int $b): array
    {
        return [$a + $b];
    }
}

$a = new A();
echo $a->sum(5, 5);