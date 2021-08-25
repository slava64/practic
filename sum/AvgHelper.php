<?php

class AvgHelper
{
    private $sumHelper;

    public function __construct()
    {
        $this->sumHelper = new SumHelper();
    }

    public function getAvg(array $arr): float {
        return array_sum($arr) / count($arr);
    }

    public function getMeanSquare(array $arr): float {
        return pow($this->sumHelper->getSum2($arr), 1/2) / count($arr);
    }
}