<?php
/**
 * Output a string
 *
 * The major differences to echo are that print only accepts a single argument and always returns 1.
 */

$str = "Hello world!";
print $str;
print "<br>What a nice day!";


function test()
{
    return print '';
}

echo "<br>";
echo "<br>";
var_dump(test());
