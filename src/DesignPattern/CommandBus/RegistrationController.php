<?php

namespace Php\DesignPattern\CommandBus;

final class RegistrationController
{
    private CommandBusInterface $bus;

    public function __construct(CommandBusInterface $bus)
    {
        $this->bus = $bus;
    }

    public function register(Request $request)
    {
        $command = new RegisterUser($request->username, $request->password);

        $this->bus->subscribe(RegisterUser::class, RegisterUserHandler::class);

        $this->bus->dispatch($command);
    }
}