<?php

use n44\iSphere;

class Sphere implements iSphere
{
    private $radius;

    // Конструктор шара:
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Метод для нахождения объема шара:
    public function getVolume() {
        return (1 / 3) * self::PI * pow($this->radius, 3);
    }

    // Метод для нахождения площади поверхности шара:
    public function getSquare() {
        return 4 * self::PI * pow($this->radius, 2);
    }
}