<?php
abstract class A {
    abstract function test(string $s);
}


abstract class B extends A {
    abstract function test(string $s);
}


class C extends B {
    public function test(string $s)
    {
        echo "call method test from class C";
    }
}

$res = (new C())->test('What');

echo '<pre>'. var_export($res, true). '</pre>';
