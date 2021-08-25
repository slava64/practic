<?php

class Employee
{
    private $name; // имя
    private $salary; // зарплата
    private $post;

    public function __construct(string $name, string $salary, Post $post)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->post = $post;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setSalary(string $salary): void {
        $this->salary = $salary;
    }

    // Геттер имени:
    public function getName(): string {
        return $this->name;
    }

    // Геттер зарплаты:
    public function getSalary(): string {
        return $this->salary;
    }

    // Геттер post:
    public function getPost(): Post {
        return $this->post;
    }

    public function changePost(Post $post): void {
        $this->post = $post;
    }
}