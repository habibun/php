<?php
$con = mysql_connect('localhost', 'root', '');
if (!$con) {
    die('Could not connect: ' .mysql_error());
}
mysql_select_db('my_library',$con);
$sql= "INSERT INTO person (FirstName,LastName,Age) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
if (!mysql_query($sql, $con)) {
    die('Error: ' . mysql_error());
}
echo '1 record added';
mysql_close($con);
?>