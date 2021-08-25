<?php


class Employee extends User
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function increaseRevenue(float $value): void {
        $this->salary = $this->salary + $value;
    }

    public function decreaseRevenue(float $value): void {
        $this->salary = $this->salary - $value;
    }
}