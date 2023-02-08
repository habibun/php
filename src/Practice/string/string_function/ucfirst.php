<?php
//to use this first character will be capital only if string are lowercase character.

$str1 = "bangladesh is my country.";
$str1temp = ucfirst($str1);
echo $str1temp;
// Bangladesh is my country.
$str2 = "BANGLADESH IS MY COUNTRY.";
$str2temp = ucfirst($str2);
echo $str2temp;
// BANGLADESH IS MY COUNTRY.
$str3temp = ucfirst(strtolower($str2));
echo $str3temp;
// Bangladesh is my country.
?>