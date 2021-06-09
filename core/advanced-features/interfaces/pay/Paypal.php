<?php

require_once './PaymentInterface.php';

class Paypal implements PaymentInterface
{
    public function payNow()
    {
        exit('paying by paypal');
    }
}