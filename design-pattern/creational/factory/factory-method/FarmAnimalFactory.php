<?php

class FarmAnimalFactory implements AnimalFactoryInterface
{
    public static function factory($animal)
    {
        switch ($animal) {
            case 'pig':
                $obj = new Pig();
                break;
            case 'chicken':
                $obj = new Chicken();
                break;
            default:
                throw new Exception("Farm animal factory could not create animal of species '" . $animal . "'", 1000);
        }
        return $obj;
    }
}