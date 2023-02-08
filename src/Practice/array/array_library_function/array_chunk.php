<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/29/13
 * Time: 10:17 PM
 */
//The array_chunk() function.txt splits an array into chunks of new arrays.
$a=array("a"=>"Cat","b"=>"Dog","c"=>"Horse","d"=>"Cow");
print_r(array_chunk($a,2));
?>

<?php
$a=array("a"=>"Cat","b"=>"Dog","c"=>"Horse","d"=>"Cow");
print_r(array_chunk($a,2,true));
?>