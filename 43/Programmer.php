<?php

use n43\Employee;
use n43\iProgrammer;

class Programmer extends Employee implements iProgrammer
{
    private $langs;

    public function addLang($lang)
    {
        $this->langs[] = $lang;
        // реализация
    }

    public function getLangs()
    {
        return $this->langs;
        // реализация
    }
}