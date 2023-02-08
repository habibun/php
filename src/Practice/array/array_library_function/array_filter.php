<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/25/13
 * Time: 12:56 PM
 */

function odd($var)
{
    return($var & 1);
}
function even($var)
{
    return(!($var & 1));
}
$array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);
echo "Odd :\n";
echo '<pre>';
print_r(array_filter($array1, "odd"));
echo '</pre>';
echo "Even:\n";
echo '<pre>';
print_r(array_filter($array2, "even"));
echo '</pre>';
?>

<?php
$entry = array(
    0 => 'foo' ,
    1 => false,
    2 => -1,
    3 => null,
    4 => ''
);
print_r(array_filter($entry));
?>