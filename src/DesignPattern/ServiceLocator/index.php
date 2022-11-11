<?php

$serviceLocator = new ServiceLocator();

//option 1
$serviceLocator->addInstance(LogService::class, new LogService());

//or option 2
$serviceLocator->addClass(LogService::class, []);

$logger = $serviceLocator->get(LogService::class);