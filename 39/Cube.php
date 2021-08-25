<?php

use n39\iCube;

class Cube implements iCube
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