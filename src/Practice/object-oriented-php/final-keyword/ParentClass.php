<?php

/**
 * Created by PhpStorm.
 * User: jony
 * Date: 6/21/16
 * Time: 11:43 PM
 */
class ParentClass
    /**
     * Stop inheriting
     */
//    final class ParentClass

{
   public function parent(){
    /**
     * Prevents child classes from overriding by prefixing the definition with final.
     */

//  final public function parent(){
        echo "I am a parent class";
    }

}