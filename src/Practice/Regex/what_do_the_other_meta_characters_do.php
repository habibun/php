<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/24/15
 * Time: 5:14 PM
 */

/*
 * A Character Class. This is just a set of characters you wish to match. They can be listed individually like:
[abcdef]
or as a range seperated by a - symbol like:
[a-f]
 */
// create a string
$string = 'big';

// Search for a match
//echo preg_match("/b[aoiu]g/", $string, $matches);

//Here we will see how to match any charater exept b.
// create a string
$string = 'abcefghijklmnopqrstuvwxyz0123456789';

// echo our string
preg_match("/[^b]/", $string, $matches);

// loop through the matches with foreach
foreach($matches as $key=>$value)
{
//    echo $key.' -> '.$value;
}

//Lets make a small change to our script and this time use preg_match_all() to match all characters within the string that do not match the pattern /[^b]/
// create a string
$string = 'abcefghijklmnopqrstuvwxyz0123456789';

// try to match all characters not within out pattern
preg_match_all("/[^b]/", $string, $matches);

// loop through the matches with foreach
foreach($matches[0] as $value)
{
//    echo $value;
}

//If we were to take this one step further, we could use it to filter out all the numbers from a string.
// create a string
$string = 'abcefghijklmnopqrstuvwxyz0123456789';

// match any character that is not a number between 0 and 9
preg_match_all("/[^0-9]/", $string, $matches);

// loop through the matches with foreach
foreach($matches[0] as $value)
{
    echo $value;
}