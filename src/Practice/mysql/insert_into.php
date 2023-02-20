<?php
/**
 * Created by Habibun Noby
 * Date: 5/4/14
 * Time: 9:27 PM
 * File Name: insert_into.php
 */
//the insert into statement used to add new records to a database table.
//to get php to execute the statements above we must use the mysql_query() function.txt.this function.txt is used to send a query or command to a mysql connection.

//the following example adds two new records to the person table:
$con = mysql_connect('localhost','root','');
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('my_library',$con);
mysql_query("insert into person (FirstName,LastName,Age) VALUES ('Peter','Griffin','35')");
mysql_query("insert into person (FirstName,LastName,Age) VALUES ('Glenn','Quanmire','33')");
mysql_close($con);
?>