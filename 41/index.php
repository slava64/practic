<?php

require_once 'Figure.php';
require_once 'Figure3d.php';
require_once 'Cube.php';
require_once 'Quadrate.php';
require_once 'Rectangle.php';

$cube1 = new Cube(5);
$cube2 = new Cube(10);

$quadrate1 = new Quadrate(3);
$quadrate2 = new Quadrate(4);

$rectangle1 = new Rectangle(3, 4);
$rectangle2 = new Rectangle(2, 3);

$arr = [$cube1, $cube2, $quadrate1, $quadrate2, $rectangle1, $rectangle2];

foreach ($arr as $item) {
    if($item instanceof \n41\Figure) {
        echo $item->getSquare()."<br/>";
    }

    if($item instanceof \n41\Figure3d) {
        echo $item->getSurfaceSquare()."<br/>";
    }
}