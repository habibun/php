<?php
//the feof() function.txt checks if the "end of file" (EOF) has been reached.
//the feof() function.txt is useful for looping through data of unknown length.

//Note: You can not read from file opened in w,a, and x mode!

if(feof($file))
    echo "End of file";