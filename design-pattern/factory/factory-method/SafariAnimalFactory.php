<?php

class SafariAnimalFactory implements AnimalFactoryInterface
{
    public static function factory($animal)
    {
        switch ($animal) {
            case 'zebra':
                $obj = new Zebra();
                break;
            case 'giraffe':
                $obj = new Giraffe();
                break;
            default:
                throw new Exception("Safari animal factory could not create animal of species '" . $animal . "'", 1000);
        }
        return $obj;
    }
}