<?php
//Breaks a string into an array

$var_names  = "mukul,shohel,ashiq,emon,jewel";
$arr_name = explode(",",  $var_names);       //in this example "," is delimeter
echo $arr_name[0];   // mukul
echo $arr_name[1];   // shohel
echo $arr_name[2];   // ashiq
echo $arr_name[3];   // emon
echo $arr_name[4];   // jewel
?>

<?php
$var_id  = "temp1.com temp2.com temp3.com temp4.com temp5.com";
$arr_id = explode(" ", $var_id);         //in here "blank space" is delimeter
print_r($arr_id);

/*
Output:
Array
(
[0] => temp1.com
[1] => temp2.com
[2] => temp3.com
[3] => temp4.com
[4] => temp5.com
)
*/
?>

<?php
$var_names  = "mukul|shohel|ashiq|emon|jewel";
// positive limit
$arr_name_pos = explode("|", $var_names, 2);  //positive limit  return same array string
print_r($arr_name_pos);
/*
Output:
Array
(
[0] => mukul
[1] => shohel|ashiq|emon|jewel
)
*/
?>



<?php
$var_names  = "mukul|shohel|ashiq|emon|jewel";
// negative limit
$arr_name_neg = explode("|", $var_names,  -2);      //negative limit merge as limit value
print_r($arr_name_neg);
/*
Output:
Array
(
[0] => mukul
[1] => shohel
[2] => ashiq
)
*/
?>


<?php
//explode function.txt with limitation
$someWords = "Please don't blow me to pieces.";
$wordChunks = explode(" ", $someWords);
for($i = 0; $i < count($wordChunks); $i++){
    echo "Piece $i = $wordChunks[$i] <br />";
}
$wordChunksLimited = explode(" ", $someWords, 4);
for($i = 0; $i < count($wordChunksLimited); $i++){
    echo "Limited Piece $i = $wordChunksLimited[$i] <br />";
}
?>




