<?php

class Arr
{
    private $nums = []; // массив чисел
    private $sumHelper; // сюда запишется объект класса SumHelper
    private $avgHelper;

    // Конструктор класса:
    public function __construct()
    {
        $this->sumHelper = new SumHelper();
        $this->avgHelper = new AvgHelper();
    }

    // Находим сумму квадратов и кубов элементов массива:
    public function getSum23()
    {
        // Для краткости запишем $this->nums в переменную:
        $nums = $this->nums;

        // Найдем описанную сумму:
        return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
    }

    // Добавляем число в массив:
    public function getAvgMeanSum(): float {
        return $this->avgHelper->getAvg($this->nums) + $this->avgHelper->getMeanSquare($this->nums);
    }

    // Добавляем число в массив:
    public function add($number)
    {
        $this->nums[] = $number;
        return $this;
    }


}