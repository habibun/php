<?php

require_once './PaymentInterface.php';


class Cash implements PaymentInterface
{
    public function payNow()
    {
        $this->login();
        exit('paying by cash');
    }

    private function login()
    {
        echo('login'. "\n");
    }
}