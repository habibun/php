<?php
/**
 * Created by Habibun Noby
 * Date: 5/16/14
 * Time: 7:17 PM
 * File Name: fread.php
 */
//fread function.txt is used to read file
//one character is equal to one byte.If you wanted to read the first five characters then you would use five as the integer.
$myFile= "../used-files/testFile.txt";
$fh = fopen($myFile,'r');
$theData = fread($fh,5);
fclose($fh);
echo $theData;
?>