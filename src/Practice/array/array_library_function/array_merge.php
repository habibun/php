<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/25/13
 * Time: 12:16 PM
 */
//the array_merge function.txt merges one or more arrays into one array.
//when we work in database then two query's output in a single array
$a1=array("a"=>"Horse","d"=>"Dog");
$a2=array("c"=>"Cow","b"=>"Cat");
print_r(array_merge($a1,$a2));
?>

<?php
$data1 = array("cat", "goat");
$data2 = array("dog", "cow");
print_r(array_merge($data1, $data2));
?>