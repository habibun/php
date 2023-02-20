<?php
/**
 * Created by Habibun Noby
 * Date: 5/6/14
 * Time: 9:29 PM
 * File Name: the_where_clause.php
 */
//to select only data that matches a specified criteria,add a where clause to the select statement.
$con = mysql_connect('localhost','root','');
if (!$con) {
    die("Could not connect: " .mysql_error());
}
mysql_select_db("my_library",$con);

$result = mysql_query("SELECT * FROM person
WHERE FirstName= 'Peter'");
while ($row = mysql_fetch_array($result)) {
    echo $row['FirstName']. " " . $row['LastName'];
    echo "<br />";
}
?>