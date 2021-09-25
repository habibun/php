<?php

namespace Php\DesignPattern\EventBus;

use NilPortugues\MessageBus\EventBus\EventHandler;

final class SetupUserAccountHandler implements EventHandler
{
    private $userFriendsRepository;
    private $userCreditsRepository;

    public function __construct($userFriendsRepository, $userCreditsRepository)
    {
        $this->userFriendsRepository = $userFriendsRepository;
        $this->userCreditsRepository = $userCreditsRepository;
    }

    public function __invoke(UserRegistered $event)
    {
//        $this->userFriendsRepository->add(new UserFriendsCollection($event->getUserId(), []));
//        $this->userCreditsRepository->add(new UserCredits($event->getUserId(), new Credits(0));
    }

    public static function subscribedTo() : string
    {
        return UserRegistered::class;
    }
}