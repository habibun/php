<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 4/18/14
 * Time: 8:36 PM
 */
//Finds the first occurrence of a string inside another string (case-sensitive)
$firstString = "The quick brown fox";
$secondString = " jumped over the lazy dog.";
$thirdString=$firstString.$secondString;

echo strstr($thirdString, "brown");
?>