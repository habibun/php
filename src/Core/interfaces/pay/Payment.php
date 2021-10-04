<?php

require_once './PaymentInterface.php';

class Payment
{
    public function pay(PaymentInterface $paymentType)
    {
        $paymentType->payNow();
    }
}