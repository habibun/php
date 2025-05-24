<?php

namespace Php\Release\v82;

/**
 * PHP 8.2 adds a new random number generator that fixes a lot of problems with the previous one: it’s more performant, more secure, it’s easier to maintain, and doesn’t rely on global state; eliminating a range of difficult to detect bugs when using PHP’s random functions.
 *
 * There’s a new class called Randomizer, which accepts a randomizer engine. Now you can change that engine, depending on your needs. For example, to differentiate between a production and testing environment.
 */

$is_production = true;
$rng = $is_production
    ? new Random\Engine\Secure()
    : new Random\Engine\Mt19937(1234);

$randomizer = new Random\Randomizer($rng);
$randomizer->shuffleString('foobar');

