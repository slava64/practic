<?php

class Student
{
    private $name;
    private $course;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->course = 1;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getCourse(): int {
        return $this->course;
    }

    public function transferToNextCourse(): void {
        $newCourse = $this->course + 1;
        if($this->isCourseCorrect($newCourse)) {
            $this->course = $newCourse;
        }
    }

    private function isCourseCorrect(int $course): bool{
        return $course <= 5;
    }
}