<?php

class User
{
    private $name;
    private $surname;
    private $patronymic;

    public function __construct($name, $surname, $patronymic)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->surname . ' ' . $this->name . ' ' . $this->patronymic;
    }

}