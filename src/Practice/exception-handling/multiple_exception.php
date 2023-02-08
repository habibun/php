<?php
/**
 * Created by Habibun Noby
 * Date: 5/1/14
 * Time: 11:10 AM
 * Year: 2014
 * File Name: multiple_exception.php
 */
//it is possible for a script to use multiple exceptions to checks for multiple conditions.
class customerException extends Exception
{
    public function errorMessage()
    {
        //error message
        $errorMsg = 'Error on line '.$this->getLine().'in '. $this->getFile().':<b>'.$this->getMessage().'<br/> is not a valid email address';
        return $errorMsg;
    }
}

$email = "someone@example.com";

try {
    //check if
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        //throw exception if email is not valid
        throw new customException($email);
    }
    //check for "example" in mail address
    if (strpos($email, "example") !== FALSE) {
        throw new Exception("$email is an example e-mail");
    }
}
catch(customException $e)
{
    echo $e->errorMessage();
}
catch(Exception $e)
{
    echo $e->getMessage();
}
?>

