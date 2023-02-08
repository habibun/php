<?php
/*
In multidimensional array each element in the main array can also be an array.
And each element in the sub-array can be an array and so on.
*/

$student=array("technology"=>array("c"=>"CMT","e"=>"ENT","s"=>"CIVIL"),
    "semester"=>array(1,2,3,4,5,6,7,8),
    "shift"=>array(1=>"first",2=>"second"));
$student['c'][1]="Nipa";
print_r($student);
?>


<?php
$continents=array("Asia"=>array("Bangladesh","India","Pakistan"),
    "Europe"=>array("England","France"),"Africa"=>array("Kenya",
        "Libya","Somalia"));
print ($continents["Africa"][2]);
?>


<?php
$families = array(
    "Griffin" => array(
        "Peter",
        "Lois",
        "Megan"
    ),
    "Quigmire"=>array(
        'Glenn'
    ),
    "Brown"=>array(
        "Cleveland",
        "Loretta",
        "Junior"
    )
);
//print_r($families);
echo "Is ".$families['Griffin'][2]."a part of the Griffin family?";
?>