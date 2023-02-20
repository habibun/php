<?php
/**
 * Created by Habibun Noby
 * Date: 5/5/14
 * Time: 9:10 PM
 * File Name: select_data.php
 */
//the select statement is used to select data from database
//the following example selects all the data stored in the person's table (the * selects all of the data in the table):
$con = mysql_connect('localhost','root','');
if (!$con) {
    die("Could not connect: " . mysql_error());
}
mysql_select_db('my_library',$con);
$result = mysql_query("SELECT * FROM person");
while ($jony = mysql_fetch_array($result)) {
    echo $jony['FirstName'] . " " . $jony['LastName'];
    echo "<br />";
}
mysql_close($con);
?>