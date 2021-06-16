<?php
namespace App\Math;

use App\Math\Circle as CircleNew;

class Circle {
    const PI = 3.14;
    public $radius;

    public function __construct($radius) {
        $this -> radius = $radius;
    }

    public function getArea() {
        return self::PI * $this -> radius ** 2;
    }
}

$a = new CircleNew(10);
echo $a->getArea();