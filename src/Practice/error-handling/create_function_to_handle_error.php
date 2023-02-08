<?php
/**
 * Created by Habibun Noby
 * Date: 4/29/14
 * Time: 10:48 PM
 * Year: 2014
 * File Name: create_function_to_handle_error.php
 */
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr<br />";
    echo "Ending Script";
    die();
}