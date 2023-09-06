<?php

namespace Php\Release\Php80To81;

class User {
    public readonly int $uid;

    public function __construct(int $uid)
    {
        $this->uid = $uid;
    }

    public function getUid()
    {
        return $this->uid;
    }
}

$u = new User(1);
echo $u->getUid();
echo "</br>";

exit('exit');

