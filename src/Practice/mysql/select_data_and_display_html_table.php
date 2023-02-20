<?php
/**
 * Created by Habibun Noby
 * Date: 5/5/14
 * Time: 9:33 PM
 * File Name: select_data_and_display_html_table.php
 */
//the following example selects the same data as the example above,but will display the data in an html table:

$con = mysql_connect('localhost','root','');
if (!$con) {
    die("Could not connect: " . mysql_error());
}
mysql_select_db("my_library",$con);
$result = mysql_query("SELECT * FROM person");
echo "<table border='1'>
<tr>
<th>FirstName</th>
<th>LastName</th>
</tr>";
while ($row = mysql_fetch_array($result)) {
    echo "<tr><td>";
  echo $row['FirstName'];
    echo "</td><td>";
  echo $row['LastName'];
    echo "</td></tr>";
}
?>