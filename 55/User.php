<?php

class User
{
    private $name;
    private $age;

    public function __set($name, $value)
    {
        switch($name) {
            case 'name':
                if($value != '') {
                    $this->name = $value;
                }
                break;
            case 'age':
                if ($value >= 0 and $value <= 70) {
                    $this->age = $value;
                }
                break;
            default:
                // Такого свойства нет
                break;
        }
    }

    public function __get($name)
    {
        return $this->$name;
    }
}