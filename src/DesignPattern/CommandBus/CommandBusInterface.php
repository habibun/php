<?php

namespace Php\DesignPattern\CommandBus;

interface CommandBusInterface
{
    public function subscribe(string $commandClassName, string $handlerClassName);

    public function dispatch(CommandInterface $command);
}