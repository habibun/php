<?php

/**
 * Created by PhpStorm.
 * User: jony
 * Date: 6/21/16
 * Time: 11:26 PM
 */
define("php", 'php');

class ClassConstants
{
    const name = "my name is jony";
}

$classConstants = new ClassConstants();
echo $classConstants::name;