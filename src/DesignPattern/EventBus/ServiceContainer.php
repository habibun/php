<?php

namespace Php\DesignPattern\EventBus;

class ServiceContainer
{
    public function register()
    {
        $container['SetupUserAccountHandler'] = function($container) {
            return new SetupUserAccountHandler(
                $container->get('UserFriendRepository'),
                $container->get('UserCreditsRepository')
            );
        };
        $container['SendWelcomeEmailHandler'] = function($container) {
            return new SendWelcomeEmailHandler($container->get('EmailProvider'));
        };
    }
}