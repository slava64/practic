<?php

class Test
{
    public function method1() {
        echo 1;
    }
}

$test = new Test();

$className = !empty($_GET['class']) ? $_GET['class'] : null;
$methodName = !empty($_GET['method']) ? $_GET['method'] : null;

if(class_exists($className)) {
    if(method_exists($className, $methodName)) {
        $test = new $className();
        echo $test->$methodName();
    }
}