<?php

/**
 * Created by PhpStorm.
 * User: jony
 * Date: 6/24/16
 * Time: 1:07 AM
 */
class ObjectCloning
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
}

$objectCloning = new ObjectCloning();
$objectCloning->setCategory("category1<br>");

//$objectCloning = $reference;
$reference = clone $objectCloning;
$reference->setCategory("category from reference<br>");
echo $objectCloning->getCategory();

echo $reference->getCategory();