<?php
/**
 * Created by PhpStorm.
 * User: habibun
 * Date: 9/20/15
 * Time: 12:06 PM
 */

// create a string
$string = 'abcdefghijklmnopqrstuvwxyz0123456789';

// try to match the beginning of the string
if(preg_match("/^abc/", $string))
{
    // if it matches we echo this line
    echo 'The string begins with abc';
}
else
{
    // if no match is found echo this line
    echo 'No match found';
}