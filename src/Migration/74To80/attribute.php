<?php

#[\Php\Core\Attribute\ApplyMiddleware('Hello World')]
class Index
{

}

$reflection = new \ReflectionClass(\Php\Core\Attribute\Index::class);
$attributes = $reflection->getAttributes();
$attributes[0]->newInstance()->getMiddleware();


#[\Attribute]
class ApplyMiddleware
{
    public string $middleware;

    public function __construct($middleware)
    {
        $this->middleware = $middleware;
    }

    public function getMiddleware()
    {
        echo 'test';
    }
}