<?php
class Customer {
    public Address $address;

    public function getAddress(): ?Address{
        return $this->address;
    }
}
class Address {
    public function getCountry(): string {}
}


$customer = new Customer();

//previous
$address = $customer->getAddress();
$country = $address ? $address->getCountry() : null;


//now
$country = $customer->getAddress()?->getCountry();
