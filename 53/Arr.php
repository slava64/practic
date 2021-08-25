<?php

class Arr
{
    private $numbers = [];

    public function add(int $number) {
        $this->numbers[] = $number;
        return $this;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return (string)array_sum($this->numbers);
    }


}