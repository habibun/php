<?php
class Class1
{

    private $class2;

    public function __construct(Class2 $class2)
    {
        $this->class2 = $class2;
    }

    public function badMethod()
    {
        return $this->class2->badMethod()->methodClass3();
    }

    public function goodMethod()
    {
        return $this->class2->goodMethod();
    }
}

class Class2
{
    private $class3;

    public function __construct(Class3 $class3)
    {
        $this->class3 = $class3;
    }

    public function badMethod()
    {
        return $this->class3;
    }

    public function goodMethod()
    {
        return $this->class3->methodClass3();
    }
}

class Class3
{
    public function methodClass3()
    {
        // Code for this method
        return true;
    }
}

$class3 = new Class3();
$class2 = new Class2($class3);
$class1 = new Class1($class2);

if ($class1->methodBad()) {
    echo 'The bad method was true!';
}

if ($class1->methodGood()) {
    echo 'The good method was true!';
}