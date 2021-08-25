<?php

namespace n40;

interface iEmployee extends iUser
{
    public function setSalary($salary);
    public function getSalary();
}