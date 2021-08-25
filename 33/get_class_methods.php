<?php

class Test
{
    public function method1() {
        return 1;
    }

    public function method2() {
        return 2;
    }

    public function method3() {
        return 3;
    }
}

var_dump(get_class_methods('Test'));

$test = new Test;

$methods = get_class_methods($test);

foreach ($methods as $method) {
    echo $test->$method();
}


