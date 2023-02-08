<?php
/**
 * Created by Habibun Noby
 * Date: 5/16/14
 * Time: 10:59 PM
 * File Name: truncate.php
 */

//to delete all the data from file.
$myFile = "../used-files/testFile.txt";
$fh = fopen($myFile, 'w');
fclose($fh);
?>