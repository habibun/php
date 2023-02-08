<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/20/13
 * Time: 10:52 PM
 */
//the array_search() function.txt search an array for a value and returns the key.
$a=array("a"=>"Dog","b"=>"Cat","c"=>"Horse");
echo array_search("Dog",$a);
?>
<!--another example-->
<?php
$a=array("a"=>"Dog","b"=>"Cat","c"=>"Horse");
echo array_search("Cat",$a);
?>
<!--another example-->

<?php
$data = array(
    "blue"  => "#0000cc",
    "black" => "#000000",
    "green" => "#00ff00"
);
echo "Found " . array_search("#0000cc", $data);
?>