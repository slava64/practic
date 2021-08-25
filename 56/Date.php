<?php

namespace n56;

class Date
{
    private $time;

    public function __construct($date = null)
    {
        $date = !empty($date) ? $date : date("Y-m-d");

        $this->time = $this->getTimestamp($date);
    }

    public function getDay()
    {
        return date('d', $this->time);
    }

    public function getMonth($lang = null)
    {
        $arrMonthRu = [1 => 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
        $arrMonthEn = [1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        // возвращает месяц
        $month = date('m', $this->time);

        // переменная $lang может принимать значение ru или en
        // если эта не пуста - пусть месяц будет словом на заданном языке
        if($lang == 'ru') {
            return $arrMonthRu[$month];
        } elseif($lang == 'en') {
            return $arrMonthEn[$month];
        } else {
            return $month;
        }
    }

    public function getYear()
    {
        return date('Y', $this->time);
    }

    public function getWeekDay($lang = null)
    {
        // возвращает день недели
        $arrWeekRu = [1 => "Понедельник" , "Вторник" , "Среда" , "Четверг" , "Пятница" , "Суббота" , "Воскресенье"];
        $arrWeekEn = [1 => "Monday" , "Tuesday" , "Wednesday" , "Thursday" , "Friday" , "Saturday" , "Sunday"];

        $weekNumber = date('w', $this->time);
        // переменная $lang может принимать значение ru или en
        // если эта не пуста - пусть месяц будет словом на заданном языке
        if($lang == 'ru') {
            return $arrWeekRu[$weekNumber];
        } elseif($lang == 'en') {
            return $arrWeekEn[$weekNumber];
        } else {
            return $weekNumber;
        }
    }

    public function addDay($value)
    {
        $this->time = $this->time + $value * 24 * 60 * 60;
        return $this;
    }

    public function subDay($value)
    {
        $this->time = $this->time - $value * 24 * 60 * 60;
        return $this;
    }

    public function addMonth($value)
    {
        $this->time = strtotime('+'.$value.' MONTH', $this->time);
        return $this;
    }

    public function subMonth($value)
    {
        $this->time = strtotime('-'.$value.' MONTH', $this->time);
        return $this;
    }

    public function addYear($value)
    {
        $this->time = strtotime('+'.$value.' YEAR', $this->time);
        return $this;
    }

    public function subYear($value)
    {
        $this->time = strtotime('-'.$value.' YEAR', $this->time);
        return $this;
    }

    public function format($format)
    {
        return date($format, $this->time);
    }

    public function __toString()
    {
        return date("Y-m-d", $this->time);
    }

    private function getTimestamp($date) {
        list($year, $month, $day) = explode("-", $date);
        return mktime(0, 0, 0, $month, $day, $year);
    }
}