<?php

use n46\Helper;

class City
{
    use Helper;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}