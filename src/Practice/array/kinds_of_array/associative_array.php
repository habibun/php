<?php
/* 
An associative array,each id is associated with a value.when storing data about specific named values,
a numerical array is not always the best choice.
*/
//with associative array we can use values as keys and assign values to them.
//1st method to declare associative array
$ages=array("Robiul"=>30,"Tanjil"=>23,"Mamun"=>34);
echo $ages['Robiul'];
?>


<?php
//id id keys can be used in a script
$ages['Robiul']="30";
$ages['Tsnjil']="23";
$ages['Mamun']="34";
echo "Robiul is ".$ages["Robiul"]. " year old.";
?>