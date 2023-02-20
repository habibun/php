<?php
/**
 * Created by Habibun Noby
 * Date: 5/9/14
 * Time: 8:29 PM
 * File Name: update.php
 */
//the update statement is used to modify data in a database table.

$con = mysql_connect('localhost','root','');
if (!$con) {
    die("Could not connect" .mysql_error());
}
mysql_select_db('my_library', $con);
mysql_query("UPDATE person SET Age = '36' WHERE FirstName='peter' AND LastName='Griffin'");
mysql_close($con);
?>