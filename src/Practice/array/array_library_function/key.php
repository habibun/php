<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/21/13
 * Time: 10:06 PM
 */
/*the key() function.txt returns the element key from the current key from the current internal pointer position.
This function.txt returns FALSE on error*/
$people=array("Peter","Joe","Glenn","Cleveland");
echo "The key from the current position is: " . key($people);
?>

<?php
$array=array(
    'fruit1'=>'apple',
    'fruit2'=>'orange',
    'fruit3'=>'grape',
    'fruit4'=>'apple',
    'fruit5'=>'apple');
//this cycle echoes all associative array
//key where values equals "apple"
while($fruit_name=current($array))
{
    if($fruit_name='apple')
    {
        echo key($array).'<br />';
    }
    next($array);
}
?>