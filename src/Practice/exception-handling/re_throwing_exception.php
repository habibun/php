<?php
/**
 * Created by Habibun Noby
 * Date: 5/1/14
 * Time: 12:04 PM
 * File Name: re_throwing_exception.php
 */
class customException extends Exception
{
    public function errorMessage()
    {
        //error message
        $errorMsg = $this->getMessage().' is not a valid E-Mail address.';
        return $errorMsg;
    }

}
$email = "someone@example.com";

try
{
    try
    {
        //check for "example" in mail address
        if(strpos($email,"example") !==FALSE)
        {
            //throw exception if email is not valid
            throw new Exception($email);
        }
    }
    catch(Exception $e)
    {
        //re-throw exception
        throw new customException($email);
    }
}
catch (customException $e)
{
    //display custom message
    echo $e->errorMessage();
 }
?>