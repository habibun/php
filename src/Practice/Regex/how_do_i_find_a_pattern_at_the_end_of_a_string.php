<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/24/15
 * Time: 4:40 PM
 */

// create a string
$string = 'abcdefghijklmnopqrstuvwxyz0123456789';

// try to match our pattern at the end of the string
if(preg_match("/89\z/i", $string))
{
    // if our pattern matches we echo this
    echo 'The string ends with 89';
}
else
{
    // if no match is found we echo this line
    echo 'No match found';
}