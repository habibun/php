<?php
/**
 * Created by Habibun Noby
 * Date: 5/16/14
 * Time: 7:21 PM
 * File Name: filesize.php
 */
//if you wanted to read all the data from the file,then use filesize.
$myFile = "../used-files/testFile.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
echo $theData;
?>