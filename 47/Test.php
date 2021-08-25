<?php

use n47\Trait1;
use n47\Trait2;
use n47\Trait3;


class Test
{
    use Trait1, Trait2, Trait3 {
        Trait1::method insteadof Trait2;
        Trait1::method insteadof Trait3;
        Trait1::method as method1;
        Trait2::method as method2;
        Trait3::method as method3;
    }

    public function __construct()
    {
        echo $this->getSum();
    }


    public function getSum() {
        return $this->method1() + $this->method2() + $this->method3();
    }
}