<?php

class Test
{
    public $prop1;
    public $prop3;
}

$arr = ['prop1' => 1, 'prop2' => 2, 'prop3' => 3];

foreach ($arr as $index=>$item) {
    if(property_exists('Test', $index)) {
        echo $item;
    }
}


var_dump(property_exists('Test', 'prop1'));
