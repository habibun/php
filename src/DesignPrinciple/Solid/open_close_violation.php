<?php
//Open-closed principle violation
class Animal
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAnimalName()
    {
        $this->name;
    }
}

$animals = array(
    new Animal('lion'),
    new Animal('mouse'),
    new Animal('snake')
);


function animalSound(array $arr)
{
    for ($i=0; $i < count($arr); $i++) {
        if($arr[$i]->name == 'lion')
            echo('roar');
        if($arr[$i]->name == 'mouse')
            echo('squeak');
        if($arr[$i]->name == 'snake')
            echo('hiss');
    }
}

AnimalSound($animals);