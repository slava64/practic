<?php

use n46\Helper;

class User
{
    use Helper; // подключаем трейт

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}