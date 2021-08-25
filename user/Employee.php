<?php

class Employee extends User
{
    private $salary;

    public function __construct(string $name, string $surname, string $birthday, string $salary)
    {
        parent::__construct($name, $surname, $birthday);

        $this->salary = $salary;
    }
}