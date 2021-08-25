<?php

class Employee extends User
{
    private $salary;

    public function __construct(string $name, string $surname, string $salary)
    {
        parent::__construct($name, $surname);

        $this->salary = $salary;
    }
}