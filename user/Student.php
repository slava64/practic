<?php

class Student extends User
{
    public $course;

    public function setName(string $name): void {
        if(strlen($name) < 10) {
            parent::getName($name);
        }
    }

    public function getCourse(): string {
        return $this->course;
    }

    public function setCourse(int $course): void {
        $this->course = $course;
    }
}