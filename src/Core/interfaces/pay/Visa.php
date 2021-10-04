<?php

require_once './PaymentInterface.php';

class Visa implements PaymentInterface
{
    public function payNow()
    {
        exit('paying by visa.');
    }
}