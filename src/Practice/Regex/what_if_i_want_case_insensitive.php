<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/24/15
 * Time: 4:13 PM
 */
// create a string
$string = 'abcdefghijklmnopqrstuvwxyz0123456789';

// try to match our pattern
if(preg_match("/^ABC/i", $string))
{
    // echo this is it matches
    echo 'The string begins with abc';
}
else
{
    // if not match is found echo this line
    echo 'No match found';
}