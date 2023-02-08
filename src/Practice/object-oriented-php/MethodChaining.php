<?php

/**
 * Created by PhpStorm.
 * User: jony
 * Date: 6/22/16
 * Time: 9:45 PM
 */
class MethodChaining
{
    public $value1;
    public $value2;
    public $result;

    public function getValue($x, $y)
    {
        $this->value1 = $x;
        $this->value2 = $y;
        return $this;
    }

    public function getResult()
    {
        $this->result = $this->value1 * $this->value2;
        return $this->result;
    }
}

$methodChaining = new MethodChaining();
echo $methodChaining->getValue(2,3)->getResult();