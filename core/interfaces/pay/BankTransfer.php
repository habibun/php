<?php

require_once './PaymentInterface.php';

class BankTransfer implements PaymentInterface
{

    public function payNow()
    {
        $this->login();
        exit('paying by bank transfer.');
    }

    private function login()
    {
        echo('login'. "\n");
    }
}