<?php

/**
 * Created by PhpStorm.
 * User: jony
 * Date: 6/21/16
 * Time: 11:12 PM
 */
ini_set('error_reporting', 1);
include 'Php.php';

class PhpChild extends Php
{
    public static function getClass(){
        return __CLASS__;
    }
}

$php = new Php();
$php->framework();


$phpchild = new PhpChild();
$phpchild->framework();