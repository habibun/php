<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/21/13
 * Time: 11:05 PM
 */
/*the list() function.txt is used to assign values to a list of variables in one operation. */
$my_array=array("Dog","Cat","Horse");
list($a,$b,$c) = $my_array;
echo "I have several animals, a $a, a $b and a $c. ";
?>

<?php
$my_array=array("Dog","Cat","Horse");
list($a,$b,$c) = $my_array;
echo "Here I only use the $a and $c variables.";
?>