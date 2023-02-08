<?php
/**
 * Created by Habibun Noby
 * Date: 4/29/14
 * Time: 11:04 PM
 * Year: 2014
 * File Name: trigger_an_error.php
 */
//in a script where users can input data it is useful to trigger errors when an illegal input occurs.In
//php this is done by the trigger_error() function.txt.

//in this example an error occurs if the test variables is bigger than 1:
$test = 2;
if ($test > 1) {
    trigger_error("Value must be 1 or below");
}
?>


<?php
//error handler function.txt
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr<br />";
    echo "Ending Script";
    die();
}
//set error handler
set_error_handler("customError",E_USER_WARNING);
//trigger error
$test = 2;
if ($test > 1) {
    trigger_error("Value must be 1 or below",E_USER_WARNING);
}
?>
