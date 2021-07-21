<?php

class PetAnimalFactory implements AnimalFactoryInterface
{
    public static function factory($animal)
    {
        switch ($animal) {
            case 'cat':
                $obj = new Cat();
                break;
            case 'dog':
                $obj = new Dog();
                break;
            default:
                throw new Exception("Pet animal factory could not create animal of species '" . $animal . "'", 1000);
        }
        return $obj;
    }
}