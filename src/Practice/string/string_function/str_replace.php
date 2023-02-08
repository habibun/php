<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 4/18/14
 * Time: 8:41 PM
 */
//Replaces some characters in a string (case-sensitive)
$firstString = "The quick brown fox";
$secondString = " jumped over the lazy dog.";
$thirdString=$firstString.$secondString;
echo str_replace("quick", "super-fast",$thirdString);
?>

<?php
//another str_replace example
echo str_replace("world","Peter","Hello world!");
?>