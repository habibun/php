<?php

namespace Php\Release\v82;

/**
 * PHP 8.1 added support for readonly properties. A readonly property can only be set once, and PHP actively prevents the value from being modified even from within the scope of the class.
 *
 * PHP 8.2 takes readonly properties a step further with readonly classes. When a class is declared as readonly, all of its properties are automatically declared readonly.
 */
readonly class User {
    public string $username;
    public string $uid;
}

