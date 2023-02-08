<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/17/15
 * Time: 1:52 AM
 */

/**
 *  \w – Matches any alphanumeric character – same as [a-zA-Z0-9_]
 */
$string = 'ab-ce*fg@ hi &amp; jkl(mnopqr)stu+vw?x yz0>1234<567890';
preg_match_all("/\w/", $string, $matches);
foreach ($matches[0] as $value) {
//    echo $value;
}

/**
 *\d – Matches any non-numeric character – same as [^0-9]
 */

$string = "2 bad for perl";
if (preg_match("/^\d/",$string)) {
//    echo "Strings begins with a number";
} else {
//    echo "String does not begin with a number";
}

/**
 *The nextMetacharacter is the fullstop(.). A fullstop(.) is used to match any character one time only. This can be good if you wish to search a string for any character.
 */
$string = 'abcdefghijklmnopqrstuvwxyz0123456789';
//try to match any character
if (preg_match("/./", $string)) {
//    echo "The string contains at least one character";
} else {
//    echo "String does not contain any character";
}

/**
 * s flag to match any whitespace character
 */
$string = 'sox'."\n".'at'."\n".'noon'."\n".'taxes'."\n";
//echo the string
echo nl2br($string);

//look for a match
//echo preg_match_all("/\s/",$string,$matches);
