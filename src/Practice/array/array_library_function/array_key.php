<?php
//the array_keys() function.txt returns an array containing the keys.

$array=array(0=>100,"color"=>"red");
print_r(array_keys($array));
echo "<br/>";
$array=array("blue","red","green","blue","blue");
print_r(array_keys($array,"blue"));
echo "<br/>";
$array=array("color"=>array("blue","red","green"),"size"=>array("small","medium","large"));
print_r(array_keys($array));