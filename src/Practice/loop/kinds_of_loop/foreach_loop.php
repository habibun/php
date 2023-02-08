<?php
//The foreach statement is used to loop through arrays.
//For every loop, the value of the current array element is assigned to $value
//(and the array pointer is moved by one) - so on the next loop, you'll be looking at the next element.

$city=array("Dhaka", "Chittagong", "Rajshahi","Sylet","Khulna", "Barishal");
foreach ($city as $value)
{
echo "$value.<br>";
}
?>

<?php
$arr=array(1,2,3,4);
foreach($arr as &$value)
{
    $value = $value *2;
    echo $value. "<br>";
}
?>

<?php
$colors=array("red","blue","green","yellow");
foreach($colors as $color)
{
    echo  "Do you like $color?"."<br>";
}
?>