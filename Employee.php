<?php

class Employee
{
    private $name;
    private $surname;
    private $salary;

    public function __construct(string $name, string $surname, int $salary) {
        $this->name = $name;
        $this->surname = $surname;
        $this->salary = $salary;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSurname(): int {
        return $this->surname;
    }

    public function setSalary(int $salary): void {
        $this->salary = $salary;
    }

    public function getSalary(): string {
        return $this->salary .'$';
    }

    private function isAgeCorrect(int $age): void {
        if($age >= 1 && $age <= 100) {
            $this->setAge($age);
        }
    }


}