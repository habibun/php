<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>OOP in PHP</title>

    <?php include("class_lib.php"); ?>
</head>
<body>

<?php
$stefan = new person("Stefan Mischook");   //The variables $stefan becomes a handle/reference to our newly created person object

//create multiple object from the same class
/*$nick =new person();
$nick->set_name("Nick Waddles");
echo "Nick's full name: " .$nick->get_name();
/*echo "<br/>";*/

//directly accessing properties in a class is a no-no
/*echo "Stefan's full name: " . $stefan->name; */

//$stefan->set_name("Stefan Mischook"); //Set an objects properties
echo "Stefan's full name: " . $stefan->get_name();   //When accessing methods and properties of a class, you use the arrow (->) operator

/*
Since $pinn_number was declared private,
this line of code will generate an error.
Try it out
*/
//echo"Tell me private stuff: " . $stefan->$pinn_number;
echo("<br/>");

//action for derived class inheritance
$james = new employee("Johnny Fingers");
echo "---> " . $james->get_name();
?>

</body>
    </html>
