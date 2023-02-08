<?php
/**
 * Created by Habibun Noby
 * Date: 5/1/14
 * Time: 10:21 AM
 * Year: 2014
 * File Name: creating_a_custom_exception_class.php
 */
//the custom exception class inherits the properties from PHP's exception class and you can add custom function.txt to it.
class customException extends Exception
{
    public function errorMessage()
    {
        //error message
        $errorMsg = 'Error on line ' .$this->getLine().' in ' .$this->getFile().':<b> is not a valid E-Mail address';
        return $errorMsg;
    }
}
$email = "someone@example.com";
try {
    //check if
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        //throw exception if email is valid
        throw new customException($email);
    }
}
catch (customException $e){
    //display custom error message
    echo $e->errorMessage();
}
?>
