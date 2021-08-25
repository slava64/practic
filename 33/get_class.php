<?php

class Test1
{
    public $name;
}

class Test2
{
    public $name;
}

$test1 = new Test1();
$test1->name = 'Bob';

$test2 = new Test2();
$test2->name = 'John';

$arr = [$test2, $test1];

foreach ($arr as $item) {
    echo $item->name . ' - ' . get_class($item) . '<br/>';
}