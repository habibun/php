<?php
include './Payment.php';
include './Cash.php';


$paymentType = new Cash();

$buyProduct = new Payment();
$buyProduct->pay($paymentType);