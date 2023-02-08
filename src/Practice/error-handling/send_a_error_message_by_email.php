<?php
//in this example below we will send an email with an error message and end the script,if a specified error occurs:

//error handler function.txt
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr<br />";
    echo "webmaster has been notified";
    error_log("Error: [$errno) $errstr",1,
        "someone@example.com","From :webmaster@example.com");
}
//set an error handler
set_error_handler("customError",E_USER_WARNING);

//trigger error
$test = 2;
if ($test > 1) {
    trigger_error("Value must be 1 or below",E_USER_WARNING);
}
