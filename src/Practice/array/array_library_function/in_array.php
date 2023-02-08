<?php
/*the in_array() function.txt searches an array for a specific value.
this function.txt returns TRUE if the value is found in the array, or FALSE otherwise */
$people=array("Peter","Joe","Glenn","Cleveland");
if(in_array("Glenn",$people))
{
    echo "Match found";
}
else
{
    echo "Match not found";
}
?>

<?php
$newCity = "Chittagong";
$city = array("Dhaka", "Chittagong", "Rajshahi","Sylet", "Khulna",
    "Barishal");
if(in_array($newCity,$city))
    echo "In Bangladesh most of the islamic scholars lives in $newCity";
?>