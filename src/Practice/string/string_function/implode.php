<?php
//Returns a string from the elements of an array
$arr_division = array("Dhaka", "Chittagong", "Rajshahi", "Khulna", "Silhet", "Barishal");
$comma_separated = implode("," , $arr_division);        //array ar different element are shown in same
echo $comma_separated;                                     //in this example comma is a glue string
// Dhaka,Chittagong,Rajshahi,Khulna,Silhet,Barishal
?>



<?php
$arr_division = array("Dhaka", "Chittagong", "Rajshahi", "Khulna", "Syhlet", "Barishal");
$without_glue = implode($arr_division);         //without glue
echo $without_glue;
// DhakaChittagongRajshahiKhulnaSyhletBarishal
?>


<?php
//array implode with for loop
$pieces = array("Hello", "World,", "I", "am", "Here!");
$gluedTogetherSpaces = implode(" ", $pieces);
$gluedTogetherDashes = implode("-", $pieces);
for($i = 0; $i < count($pieces); $i++){
    echo "Piece #$i = $pieces[$i] <br />";
}
echo "Glued with Spaces = $gluedTogetherSpaces <br />";
echo "Glued with Dashes = $gluedTogetherDashes";
?>
