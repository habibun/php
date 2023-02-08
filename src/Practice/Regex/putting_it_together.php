<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/17/15
 * Time: 2:23 AM
 */

/**
 * pipe character
 */
$string = "This is a Hello World script";

//try to match the pattern This OR That OR There
//echo preg_match("/^(This|That|There)/",$string,$matches);

/**
 * pipe character
 */
$string = "This is a Hello World script";

//try to match pattern Jello or Hello
if (!preg_match("/(Je|He)llo/", $string)) {
//        echo "Pattern not found";
} else {
//    echo "Pattern found";
}

/**
 * pipe character
 */

$string = "This is a Hello World script";

//try to match the patterns Jello or Hello
//put the matches in a variable called matches
preg_match("/(Je|He)llo/", $string, $matches);

//loop through the array of matches and print them
foreach ($matches as $key => $value) {
    echo $key . "->" . $value . "\n";
}