<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/25/13
 * Time: 11:33 AM
 */
/*the each() function.txt returns the current element key and value, and moves the internal pointer forward.
this element key an value is returned in array with four elements.
two elements (1 and Value) for the element value, and two elements (0 and key) for the element key.*/
$people=array("Peter","Joe","Glenn","Clevaland");
print_r(each($people));
?>

<?php
$data = array("hero" => "Holmes", "villain" => "Moriarty");
while (list($key, $value) = each($data))
{
    echo "$key: $value \n";
}
?>

<?php
$people=array("Peter","Goe","Glenn","Cleveland");
reset($people);
while(list($key,$val)=each($people))
{
    echo "$key => $val<br />";
}
?>