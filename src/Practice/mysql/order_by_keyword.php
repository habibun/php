<?php
/**
 * Created by Habibun Noby
 * Date: 5/7/14
 * Time: 9:18 PM
 * File Name: order_by_keyword.php
 */
//the order by keyword is used to sort the data in a recordset.
//the following example selects all the data stored in the person table and sorts the result by the age column.

$con = mysql_connect('localhost', 'root' . '');
if (!$con) {
    die("Could not connect: " . mysql_error());
}
mysql_select_db("my_library", $con);
$result = mysql_query("SELECT * FROM person ORDER BY age");

while ($row = mysql_fetch_array($result)) {
    echo $row['FirstName'];
    echo " " . $row['LastName'];
    echo " " . $row['Age'];
    echo "<br />";
}
mysql_close($con);
?>