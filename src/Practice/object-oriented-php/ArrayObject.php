<?php

/**
 * Created by PhpStorm.
 * User: jony
 * Date: 6/24/16
 * Time: 11:44 PM
 */
class ArrayObject2
{

}

$arr = array("html","css","php","javascript");
$coding = new ArrayObject($arr);
$coding->append("java");
$iterator = $coding->getIterator();

while($iterator->valid()){
    echo $iterator->current();
    $iterator->next();
}