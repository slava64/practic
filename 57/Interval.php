<?php

namespace n57;

class Interval
{
    private $date1;
    private $date2;

    public function __construct(Date $date1, Date $date2)
    {
        $this->date1 = $date1;
        $this->date2 = $date2;
    }

    public function toDays()
    {
        $date1 = new \DateTime($this->date1);
        $date2 = new \DateTime($this->date2);
        $interval = $date2->diff($date1);

        return $interval->format("%d");
    }

    public function toMonths()
    {
        $date1 = new \DateTime($this->date1);
        $date2 = new \DateTime($this->date2);
        $interval = $date2->diff($date1);

        return $interval->format("%m");
    }

    public function toYears()
    {
        $date1 = new \DateTime($this->date1);
        $date2 = new \DateTime($this->date2);
        $interval = $date2->diff($date1);

        return $interval->format("%y");
    }

    public function __toString()
    {
        return "['year' => ".$this->toYears().", 'month' => ".$this->toMonths().", 'day' => ".$this->toDays()."]";
    }
}