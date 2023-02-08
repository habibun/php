<?php
/**
 * Created by Habibun Noby
 * Date: 5/10/14
 * Time: 9:12 PM
 * File Name: polymorphism.php
 */
class animalClass {
    protected $name;
    public function __construct($animalName)
    {
        $this->name = $animalName;
    }
    public function getName()
    {
        return $this->name;
    }
    public function talk()
    {
        return $this->getName().' is talking <br />';
    }
}
class dogClass extends animalClass
{
    public function getName()
    {
        return 'Dog: '.parent::getName();
    }
}
$a = new dogClass("My dog");
echo $a->talk();
$b = new animalClass("some Cat");
echo $b->talk();
