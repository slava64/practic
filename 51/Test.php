<?php

use n51\Trait1;
use n51\Trait2;

class Test
{
    use Trait1, Trait2;

    public function getSum() {
        return $this->method1() + $this->method2() + $this->method3();
    }

}