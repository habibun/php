<?php

namespace Php\DesignPattern\Behavioral\Observer;

class PatternObserver extends AbstractObserver
{
    public function __construct()
    {
    }

    public function update(AbstractSubject $subject)
    {
        writeln('*IN PATTERN OBSERVER - NEW PATTERN GOSSIP ALERT*');
        writeln(' new favorite patterns: ' . $subject->getFavorites());
        writeln('*IN PATTERN OBSERVER - PATTERN GOSSIP ALERT OVER*');
    }
}