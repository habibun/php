<?php
/**
 * Created by PhpStorm.
 * User: habibun
 * Date: 10/1/15
 * Time: 3:02 PM
 */

// the backslash(\)
$string = "this is a [templateVar]";

preg_match_all("/[\[\]]/", $string, $matches);

foreach ($matches[0] as $value) {
//    echo $value;
}

//  the . dot, or full stop
$string = 'sox at noon taxes';

//dot matches any character except a line break such as \r and \n
preg_match_all("/s.x/", $string, $matches);

foreach ($matches as $value) {
//    echo $value;
}

//Now let’s see if we can match a new line character, for our example we will use \n.
$string = 'sox' . "\n" . 'at' . "\n" . 'noon' . "\n" . 'taxes' . "\n";
//echo nl2br($string);
//echo preg_match_all("/\s/", $string, $matches);

/**
 * asterix(*) character
 *
 * this meta character matches zero or more occurences of the character immediately before it
 */
$string = 'pp';
//$string = 'phhhhp';
//echo preg_match_all("/ph*p/", $string, $matches);

/**
 * plus(+) meta character
 *
 * this meta character matches one or more occurences of the character immediately before it.
 */

//$string = 'pp';
$string = 'phhhhp';
//echo preg_match_all('/ph+p/',$string,$matches);

/**
 * (?)
 *
 * this character acts like the preceding meta characters, except the ? will matches zero or one occurences of the
 * character or regular expression  immediately preceding it.
 */
//$string = '12345678';
$string = '1234-5678';
//echo preg_match("/1234-?5678/", $string, $matches);

/**
 * curly braces or the { } meta characters
 *
 * this simply match a specific number of instances of the preceding character or range of characters.
 */
$string = 'PHP123';

// look for a match
echo preg_match("/PHP[0-9]{3}/", $string, $matches);