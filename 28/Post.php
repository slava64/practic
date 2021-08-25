<?php

class Post
{
    private $name;
    private $salary;

    public function __construct(string $name, float $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSalary(): float {
        return $this->salary;
    }
}