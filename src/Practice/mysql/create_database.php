<?php
/**
 * Created by Habibun Noby
 * Date: 5/3/14
 * Time: 7:51 PM
 * File Name: create_database.php
 */

//the create database statement is used to create a database in mysql
//to get php execute the statement above we must use the mysql_query() function.txt.this function.txt is used to send a query or command to a mysql connection.
//in this example we create a database called my_db:
$con = mysql_connect('localhost','root','');
if (!$con) {
    die("Could not connect:".mysql_error());
}
if (mysql_query("create database my_db", $con)) {
    echo "Database created";
}
else {
    echo "Error creating database: " .mysql_error();
}
mysql_close($con);
?>