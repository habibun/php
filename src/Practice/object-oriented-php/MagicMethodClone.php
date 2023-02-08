<?php

/**
 * Created by PhpStorm.
 * User: jony
 * Date: 6/24/16
 * Time: 2:11 PM
 */
class MagicMethodClone
{
    public $category;
    public $framework;

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getFramework()
    {
        return $this->framework;
    }

    /**
     * @param mixed $framework
     */
    public function setFramework($framework)
    {
        $this->framework = $framework;
    }

    public function __clone()
    {
        $m = new MagicMethodClone();
        $m->setFramework($this->framework);
       return $m;
    }
}


$magicMethodClone = new MagicMethodClone();
$magicMethodClone->setCategory("category1<br>");

//$magicMethodClone = $reference;
$reference = clone $magicMethodClone;
$reference->setCategory("category from reference<br>");
echo $magicMethodClone->getCategory();

echo $reference->getCategory();