<?php
/**
 * Created by Habibun Noby
 * Date: 5/1/14
 * Time: 10:03 AM
 * Year: 2014
 * File Name: trigger_an_error_with_valid_code.php
 */

//create function.txt with an exception
function checkNum($number)
{
    if ($number > 1) {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}
//trigger exception in a try block
try {
    checkNum(2);
    //if the exception is thrown,this strings will not be shown
    echo "If you see this, the number is 1 or below";
} //catch exception
catch (Exception $e) {
    echo "Message: " .$e->getMessage();
};