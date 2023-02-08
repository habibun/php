<?php
//the fgets() function.txt is used to read a single line from a file.
//Note: After a call to this function.txt the file pointer has moved to the next line.

$myFile = "../used-files/testFile.txt";
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
echo $theData;
?>