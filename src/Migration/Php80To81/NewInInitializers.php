<?php

namespace Php\Migration\Php80To81;

class Service
{
    private Logger $logger;

    public function __construct(Logger $logger = new Logger())
    {
        $this->logger = $logger;
    }

}


class Logger {

}
