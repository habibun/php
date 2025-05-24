<?php

namespace Php\Release\v81;

class Foo
{
    final public const XX = "foo";
}

class Bar extends Foo
{
//    public const XX = "bar"; // Fatal error
}
