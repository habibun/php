<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/1/14
 * Time: 11:12 PM
 */
//the unset function.txt is used to free the specified session variables:
unset($_SESSION['views']);

//session destroy is used to destroy full session
//Note:session_destroy will reset your session and you will lose all your stored session data.

session_destroy();
?>