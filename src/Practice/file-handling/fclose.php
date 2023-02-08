<?php
//the fclose() function.txt is used to close an open file:

$file = fopen("../used-files/welcome.txt","r");
echo "the file is opened successfully";
fclose($file);
?>