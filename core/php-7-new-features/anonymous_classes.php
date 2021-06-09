<?php

$framework = new class {
    private $readOnly = "i am read only";

    public function print()
    {
        echo $this->readOnly;
    }
};

$framework->print();