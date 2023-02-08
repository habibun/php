<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/24/15
 * Time: 11:00 PM
 */

/**
 * Ignore Case, case insensitive
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

/**
 * s modifier
 */
/*** create a string with new line characters ***/
$string = 'sox'."\n".'at'."\n".'noon'."\n".'taxes'."\n";

/*** look for a match using s modifier ***/
echo preg_match("/sox.at.noon/s", $string, $matches);

/**
 * m modifier
 */
// create a string
$string = 'sox'."\n".'at'."\n".'noon'."\n".'taxes'."\n";

// look for a match
if(preg_match("/^noon/im", $string))
{
    echo 'Pattern Found';
}
else
{
    echo 'Pattern not found';
}

/**
 * x modifier
 */
// create a string
$string = 'sox'."\n".'at'."\n".'noon'."\n".'taxes'."\n";

// create our regex using comments and store the regex
// in a variable to be used with preg_match
$regex ='
 /     # opening double quote
 ^     # caret means beginning of the string
 noon  # the pattern to match
 /imx
 ';

// look for a match
if(preg_match($regex, $string))
{
    echo 'Pattern Found';
}
else
{
    echo 'Pattern not found';
}

/**
 * e modifier
 */
