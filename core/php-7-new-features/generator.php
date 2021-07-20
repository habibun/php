<?php

function navi()
{
    $distance = 0;

    echo 'Start from driveway';

    yield '</br> First Stop.';

    echo '</br> Take a left.';

    yield '</br> Second stop sign.';

    $distance = yield;

    echo '</br> Destination reached.';

    echo '</br> Your journey was '. $distance . ' miles';
}

$control = navi();

$val = $control->current();

echo $val;

echo "<br> <br> <br> <br> <br>";

$control->next();

echo $control->current();

$control->send(50);


function values() {

    yield 100;
    yield 200;
    yield 500;

    return 500;
}

$control = values();

foreach ($control as $value) {
    echo $value;
}

echo $control->getReturn();