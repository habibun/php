<?php
//a numeric array stores each array element with a numeric index
//there are two method to create a numeric array.
//first method to declare numeric array

$fruit=array("mango","Banana","Guava","jackfruit"); //in this method index are automatically assigned(the index start at 0)
echo $fruit[1];
?>

<?php
//another method to declare numeric array
//in the following example you access the variables values by referring to the array name and index.

$fruit[0]="Mango";
$fruit[1]="Banana";
$fruit[2]="Jackfruit";
$fruit[3]="Coconut";
echo $fruit[0]." and " .$fruit[1]." are my favorite fruits.";
?>