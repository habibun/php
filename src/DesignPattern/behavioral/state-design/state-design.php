<?php

class Context
{
    private $state;

    public function __construct(State $obj)
    {
        $this->state = $obj;
    }

    public function setState(State $value)
    {
        $this->state = $value;
        echo "Inside Context: Stage ... State changed\n";
    }

    public function getState()
    {
        return $this->state;
    }

    public function request()
    {
        $this->state->Handle($this);
    }
}

abstract class State
{
    public abstract function Handle(Context $context);
}

class ConcreteStateA extends State{
    public function Handle(Context $context)
    {
        echo "ConcreteStateA::Handle()\n";
        $context->setState(New ConcreteStateB());
    }
}

class ConcreteStateB extends State{
    public function Handle(Context $context)
    {
        echo "ConcreteStateB::Handle()\n";
        $context->setState(New ConcreteStateA());
    }
}

$state = new ConcreteStateA();
$context = new Context($state);

$context->request();
$context->request();