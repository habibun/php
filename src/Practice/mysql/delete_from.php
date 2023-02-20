<?php
/**
 * Created by Habibun Noby
 * Date: 5/9/14
 * Time: 8:46 PM
 * File Name: delete_from.php
 */
//delete from statement is used to delete rows from a database table.
$con = mysql_connect('localhost','root','');
if (!$con) {
    die("Could not connect" .mysql_error());
}
mysql_select_db('my_library', $con);
mysql_query("DELETE FROM person WHERE LastName='Griffin'");
mysql_close($con);
?>
