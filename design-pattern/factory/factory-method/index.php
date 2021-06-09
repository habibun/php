<?php

try {
    $cat = PetAnimalFactory::factory('cat'); // object(Cat)#1
    echo $cat->getSpecies(); // cat

    $pig = FarmAnimalFactory::factory('pig'); // object(Pig)#1
    echo $pig->getSpecies(); // pig

    $giraffe = SafariAnimalFactory::factory('giraffe'); // object(Giraffe)#1
    echo $giraffe->getSpecies(); // giraffe

    $petChicken = PetAnimalFactory::factory('chicken'); // This will throw an Exception

} catch(Exception $e) {
    echo $e->getMessage(); // PetAnimalFactory could not create animal of species 'chicken'
}