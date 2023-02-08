<?php
//the fgetc() function.txt is used to read a single character from a file.

//Note:After a call to this function.txt the file pointer has moved to the next line.

//Example: the example below reads a file character by character,until the end of file is reached.

$file = fopen("../used-files/testFile.txt","r")
    or exit("Unable to open file!");
while (!feof($file)) {
    echo fgetc($file);
}
fclose($file);
?>
