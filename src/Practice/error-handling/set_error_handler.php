<?php
/**
 * Created by Habibun Noby
 * Date: 4/29/14
 * Time: 10:56 PM
 * Year: 2014
 * File Name: set_error_handler.php
 */
//testing the error handler by trying to output variables that does not exist:
//error handler function.txt
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr";
}
//set error handler
set_error_handler("customError");
//trigger error
echo ($test);
?>