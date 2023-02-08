<?php
//Compares two strings (case-sensitive)

$str1 = 'phpbook' ;
$str2 = 'phpBook' ;

if(strcmp($str1,  $str2)<0)
    echo "str1 is less than str2.";
if(strcmp($str1,  $str2)>0)
    echo "str1 is greater than str2.";
if(strcmp($str1,  $str2)==0)
    echo "str1 and str2 is equal.";
// str1 is greater than str2.
/*
str1         str2           output
------------------------------------------------------------
phpbook   phpBook      str1 is greater than str2.
phpBook   phpbook      str1 is less than str2.
phpbook   phpbook      str1 and str2 is equal.
*/
?>