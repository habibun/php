<?php

namespace Php\DesignPattern\Behavioral\Observer;

abstract class AbstractObserver
{
    abstract function update(AbstractSubject $subject_in);
}
