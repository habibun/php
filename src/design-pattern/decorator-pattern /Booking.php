<?php

namespace designPattern\decoratorPattern;

interface Booking
{
    public function calculatePrice();

    public function getDescription();
}

abstract class BookingDecorator implements Booking {

    public function __construct(Booking $booking)
    {
    }
}

class DoubleRoomBooking implements Booking {
    public function calculatePrice(): int
    {
        return 40;
    }

    public function getDescription(): string
    {
        return 'double room';
    }
}

class ExtraBed extends BookingDecorator
{
    private const PRICE=30;
    public function calculatePrice()
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription()
    {
        return $this->booking->getDescription() . ' with extra bed';
    }
}

class Wifi extends BookingDecorator
{
    private const PRICE = 2;
    public function calculatePrice()
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription()
    {
        return $this->booking->getDescription() . ' with wifi.';
    }

}