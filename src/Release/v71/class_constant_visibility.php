<?php

namespace Php\Migration\Php70To71;

/**
 * Class constant visibility.
 *
 * Support for specifying the visibility of class constants has been added.
 */
class ConstDemo
{
    public const PUBLIC_CONST_A = 1;
    public const PUBLIC_CONST_B = 2;
    protected const PROTECTED_CONST = 3;
    private const PRIVATE_CONST = 4;
}
