<?php

/**
 * Liskov substitution principle
 *
 * If S is a subtype of T, then objects of type T may be replaced with objects of type S (i.e., an object of type T may be substituted with any object of a subtype S) without altering any of the desirable properties of the program (correctness, task performed, etc.)
 */
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