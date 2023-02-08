<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("test_raw", $con);
$result = mysql_query("SELECT * FROM persons ORDER BY age");
while($row = mysql_fetch_array($result))
{
echo $row['firstname'];
echo " " . $row['lastname'];
echo " " . $row['age'];
echo "<br />"; 
}
mysql_close($con);
?>