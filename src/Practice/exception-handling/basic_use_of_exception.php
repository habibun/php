<?php
/**
 * Created by Habibun Noby
 * Date: 5/1/14
 * Time: 9:49 AM
 * File Name: basic_use_of_exception.php
 */

//if an exception is not caught, a fatal error will be issued with an "Uncaught Exception" message.
//let's try to throw an exception without catching it:


//create function.txt with an exception
function checkNum($number)
{
    if ($number > 1) {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}

//trigger exception
checkNum(2);

?>