<?php

class Geometry
{
    private static $pi = 3.1415926535; // вынесем Пи в свойство

    public static function getCircleSquare($radius)
    {
        return self::$pi * $radius * $radius;
    }

    public static function getCircleСircuit($radius)
    {
        return 2 * self::$pi * $radius;
    }

    public static function getSphereVolume(float $radius): float {
        return 4 / 3 * self::$pi * pow($radius, 3);
    }
}