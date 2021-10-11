<?php

namespace Php\Migration\Php56To70;

/**
 * The new IntlChar class seeks to expose additional ICU functionality.
 * The class itself defines a number of static methods and constants that can be used to manipulate unicode characters.
 */
printf('%x', IntlChar::CODEPOINT_MAX);
echo IntlChar::charName('@');
var_dump(IntlChar::ispunct('!'));

