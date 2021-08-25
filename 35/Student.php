<?php


class Student extends User
{
    private $scholarship; // стипендия

    public function getScholarship()
    {
        return $this->scholarship;
    }

    public function setScholarship($scholarship)
    {
        $this->scholarship = $scholarship;
    }

    public function increaseRevenue(float $value): void {
        $this->scholarship = $this->scholarship + $value;
    }

    public function decreaseRevenue(float $value): void {
        $this->scholarship = $this->scholarship - $value;
    }
 }