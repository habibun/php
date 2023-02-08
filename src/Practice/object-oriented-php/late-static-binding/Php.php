<?php

/**
 * Created by PhpStorm.
 * User: jony
 * Date: 6/21/16
 * Time: 11:10 PM
 */
class Php
{
    public static function framework(){
//        echo self::getClass();
        /**
         * apply late static binding
        */
        echo static::getClass()."<br>";
    }

    public static function getClass(){
        return __CLASS__;
    }
}