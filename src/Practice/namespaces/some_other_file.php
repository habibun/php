<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 7/23/14
 * Time: 10:42 PM
 */

require 'Foo.php';
//use \Acme\Tools\Foo;
use Acme\Tools\Foo as SomeFooClass;


//$foo = new \Acme\Tools\Foo();


//$foo = new Foo();
$foo = new SomeFooClass();


$foo->doAwesomeFooThings();
