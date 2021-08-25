<?php

use n42\Tetragon;
use n42\Circle;

class Disk implements Tetragon, Circle
{
    private $c;

    public function __construct($c)
    {
        $this->c = $c;
    }

    public function getA(){
        return $this->c;
    }
    public function getB(){
        return $this->c;
    }
    public function getC(){
        return $this->c;
    }
    public function getD(){
        return $this->c;
    }

    public function getRadius() {
        return $this->c / (2 * 3.14);
    }
    public function getDiameter() {
        return $this->getRadius() * 2;
    }
}