<?php
// Doc: https://sourcemaking.com/design_patterns/observer/php

namespace Php\DesignPattern\Behavioral\Observer;



writeln('BEGIN TESTING OBSERVER PATTERN');
writeln('');

$patternGossiper = new PatternSubject();
$patternGossipFan = new PatternObserver();
$patternGossiper->attach($patternGossipFan);
$patternGossiper->updateFavorites('abstract factory, decorator, visitor');
$patternGossiper->updateFavorites('abstract factory, observer, decorator');
$patternGossiper->detach($patternGossipFan);
$patternGossiper->updateFavorites('abstract factory, observer, paisley');

writeln('END TESTING OBSERVER PATTERN');


function writeln($line_in)
{
    echo $line_in . "<br/>";
}

