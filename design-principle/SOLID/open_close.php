<?php
//Open-Closed Principle
abstract  class Animal {
    public $name;
    public function getAnimalName()
    {
        $this->name;
    }
    abstract function makeSound();
}

class Lion extends Animal {
    function makeSound() {
        return 'roar';
    }
}
class Squirrel extends Animal {
    function makeSound() {
        return 'squeak';
    }
}
class Snake extends Animal {
    function makeSound() {
        return 'hiss';
    }
}

$animals = array(
    new Lion(),
    new Squirrel(),
    new Snake()
);

function animalSound(array $arr)
{
    for ($i=0; $i < count($arr); $i++) {
        echo $arr[$i]->makeSound(). "<br/>";
    }
}
AnimalSound($animals);