<?php
/**
 * Created by Habibun Noby
 * Date: 5/1/14
 * Time: 12:47 PM
 * File Name: set_a_top_level_exception_handler.php
 */
//the set_exception function_handler() function.txt sets a user-defined function.txt to handle all uncaught exceptions:
function myException($exception)
{
    echo "<b>Exception:</b>" , $exception->getMessage();
}
set_exception_handler('myException');
throw new Exception('Uncaught Exception occurred');
//Note:in the code above there was no "catch" block.Instead the top level exception handler triggered.this function.txt should be used to catch uncaught exception.
?>