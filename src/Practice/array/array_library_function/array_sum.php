<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/20/13
 * Time: 11:03 PM
 */
//array_sum() function.txt returns the sum of all the values in the arrays.
$a=array(0=>"5",1=>"15",2=>"25");
echo array_sum($a);
?>

<?php
$a=array(2,4,6,8);
echo  "sum(a)=".array_sum($a)."\n";
$b=array("a"=>1.2,"b"=>2.3,"c"=>3.4);
echo "sum(b)=".array_sum($b)."\n";
?>