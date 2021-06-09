<?php

function test(array $arr) {
    var_dump($arr);
}


test([2, 3, 5, "3"]);

class A implements MyInterface {
    public function show(){
        echo "from a";
    }
}

class B {

}

function testNew(A $a)
{
    echo $a->show();
}

function testI(MyInterface $a)
{
    echo $a->show();
}

interface MyInterface {
    public function show();
}

testI(new A());