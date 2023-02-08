<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/24/15
 * Time: 4:53 PM
 */

//Here is a list of the Meta characters used for regex:
/*
    . (Full stop)
    ^ (Carat)
    * (Asterix)
    + (Plus)
    ? (Question Mark)
    { (Opening curly brace)
    [ (Opening brace)
    ] (Closing brace)
    \ (Backslash)
    | (Pipe)
    ( (Opening parens)
    ) (Closing parens)
    } (Closing curly brace)
 */

/*
 *  If you wish to search a string that contains one of these characters, eg: "1+1" then you need to escape the the meta character with a backslash like this:
 */

// create a string
$string = '1+1=2';

// try to match our pattern
if(preg_match("/^1\+1/i", $string))
{
    // if the pattern matches we echo this
    echo 'The string begins with 1+1';
}
else
{
    // if no match is found we echo this line
    echo 'No match found';
}
