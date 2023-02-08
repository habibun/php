<?php
/**
 * Created by PhpStorm.
 * User: habibun
 * Date: 9/20/15
 * Time: 11:36 AM
 */

//If we simply wanted to see if the pattern 'abc' was within our larger string we could easily do something like this:
$string = 'abcdefghijklmnopqrstuvwxyz0123456789';

echo preg_match("/abc/", $string);  // display 1