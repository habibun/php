<?php

namespace Php\DesignPattern\EventBus;

use NilPortugues\MessageBus\EventBus\EventHandler;

final class SendWelcomeEmailHandler implements EventHandler
{
    private $emailProvider;

    public function __construct($emailProvider)
    {
        $this->emailProvider = $emailProvider;
    }

    public function __invoke(UserRegistered $event)
    {
        $this->guard($event);
        $this->emailProvider->send('welcome_email', $event->getEmail());
    }

    public static function subscribedTo() : string
    {
        return UserRegistered::class;
    }
}