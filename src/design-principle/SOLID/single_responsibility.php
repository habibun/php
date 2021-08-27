<?php
/**
 * Single Responsibility Principle [A class should have only one reason to change]
 *
 * higher cohesion
 * loose coupling
 */

class UserService
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }


    public function register()
    {
        $this->createUser();
        $this->mailer->sendConfirmationEmail();
    }

    public function createUser()
    {
        //create new user
    }
}

class Mailer{

    public function sendConfirmationEmail()
    {
        //send confirmation email
    }
}
