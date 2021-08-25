<?php

use n42\Figure;
use n42\Tetragon;

class Quadrate implements Figure, Tetragon
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->a;
    }

    public function getC()
    {
        return $this->a;
    }

    public function getD()
    {
        return $this->a;
    }

    public function getSquare()
    {
        return $this->a * $this->a;
    }

    public function getPerimeter()
    {
        return 4 * $this->a;
    }
}