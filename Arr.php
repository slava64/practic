<?php

class Arr
{
    private $numbers = [];

    public function __construct(array $numbers = [])
    {
        $this->numbers = $numbers;
    }

    public function getSum(): int {
        return array_sum($this->numbers);
    }

    public function add(int $number): Arr {
        $this->numbers[] = $number;
        return $this;
    }

    public function append(array $numbers): Arr {
        $this->numbers = array_merge($this->numbers, $numbers);
        return $this;
    }


    public function getAvg(): float {
        return array_sum($this->numbers)/count($this->numbers);
    }
}