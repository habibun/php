<?php

namespace Php\DesignPattern\EventBus;

use NilPortugues\MessageBus\EventBus\Event;

final class UserRegistered implements Event
{
    private $userId;
    private $email;

    public function __construct(string $userId, string $email)
    {
        $this->userId = $userId;
        $this->email = $email;
    }

    public function getUserId() : string
    {
        return $this->userId;
    }

    public function getEmail() : string
    {
        return $this->email;
    }
}