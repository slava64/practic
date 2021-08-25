<?php

use n41\Figure3d;

class Cube implements Figure3d
{
    private $a;

    public function __construct($a) {
        $this->a = $a;
    }
    public function getVolume() {
        return pow($this->a, 3);
    }
    public function getSurfaceSquare() {
        return 6 * pow($this->a, 2);
    }
}