<?php

include 'Test.php';

class Main
{
    use Test;

    public function showFromTrait($msg)
    {
        $this->show($msg);
    }

}

(new Main())->showFromTrait('Show my name');