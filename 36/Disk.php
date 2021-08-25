<?php

class Disk implements Figure
{
    private $pi = '3.14';
    private $r;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function getSquare() {
        return $this->pi * pow($this->r, 2);
    }
    public function getPerimeter() {
        return 2 * $this->pi * $this->r;
    }
}