<?php
/**
 * Created by Habibun Noby
 * Date: 5/3/14
 * Time: 7:56 PM
 * File Name: create_table.php
 */

//create table statement is used to create a database table in mysql.
//we must add the create table statement to the mysql_query() function.txt to execute the command.
//the following example shows how you can crate a table named 'person' with three columns.
//the column names will be FirstName,LastName and Age:

$con = mysql_connect('localhost','root','');
if (!$con) {
    die("Could not connect: " . mysql_error());
}
//create database
if (mysql_query("CREATE DATABASE my_library", $con)) {
    echo "Database create";
}
else {
    echo "Error creating database: " . mysql_error();
}
//create table in my_library database
mysql_select_db('my_library',$con);
$sql = "CREATE TABLE person
  (
  personID int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (personID),
  FirstName varchar(15),
  LastName varchar(15),
  Age int
  )";
// executed query
mysql_query($sql,$con);
mysql_close($con);
?>
