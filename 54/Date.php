<?php

class Date
{
    public $day;
    public $month;
    public $year;

    private $weekDays = [1 => "Понедельник" , "Вторник" , "Среда" , "Четверг" , "Пятница" , "Суббота" , "Воскресенье"];

    public function __get($name)
    {
        if($name == 'weekDay') {
            return $this->weekDays[date("w", $this->getTimestamp())];
        }

    }

    private function getTimestamp() {
        return mktime(0, 0, 0, $this->month, $this->day, $this->year);
    }
}