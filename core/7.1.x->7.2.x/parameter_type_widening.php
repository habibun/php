<?php

interface A {
    public function test(array $input);
}


class B implements A {
    public function test($input)
    {
        foreach ($input as $value) {
            echo $value;
        }
    }

}

$res = new B();
echo '<pre>'. var_export($res->test([2,3]), true).'</pre>';
