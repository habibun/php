<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 4/18/14
 * Time: 8:04 PM
 */
?>
example one:
<?php
$firstString = "The quick brown fox";
$secondString = " jumped over the lazy dog.";

$finalString= $firstString.$secondString;
echo $finalString;
?>

example two:
<?php
$firstString = "The quick brown fox";
$secondString = " jumped over the lazy dog.";

$finalString = $firstString;
$finalString .= $secondString ;
echo $finalString;
?>