<?php
//to use this first character will be capital per word only if string are lowercase character.

$str1 = "bangladesh is my country.";
$str1temp = ucwords($str1);
echo $str1temp;
// Bangladesh Is My Country.
$str2 = "BANGLADESH IS MY COUNTRY.";
$str2temp = ucwords($str2);
echo $str2temp;
// BANGLADESH IS MY COUNTRY.
$str3temp = ucwords(strtolower($str2));
echo $str3temp;
// Bangladesh Is My Country.
?>