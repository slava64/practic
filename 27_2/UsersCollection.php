<?php

class UsersCollection
{
    private $employees = []; // массив работников
    private $students = []; // массив студентов

    public function add($user): void {
        if($user instanceof Employee) {
            $this->employees[] = $user;
        }

        if($user instanceof Student) {
            $this->students[] = $user;
        }
    }

    public function getTotalSalary(): float {
        $sum = 0;
        foreach ($this->employees as $employee) {
            $sum = $sum + $employee->getSalary();
        }

        return $sum;
    }

    public function getTotalScholarship(): float {
        $sum = 0;
        foreach ($this->students as $student) {
            $sum = $sum + $student->getScholarship();
        }

        return $sum;
    }

    public function getTotalPayment(): float {
        return $this->getTotalSalary() + $this->getTotalScholarship();
    }
}