<?php

require_once 'Figure.php';
require_once 'Quadrate.php';
require_once 'Rectangle.php';

$quadrate = new Quadrate(2);
echo $quadrate->getSquare(); // выведет 4
echo $quadrate->getPerimeter(); // выведет 8
echo $quadrate->getSquarePerimeterSum();

echo '<br/>';

$rectangle = new Rectangle(2, 2);
echo $rectangle->getSquare(); // выведет 4
echo $rectangle->getPerimeter(); // выведет 8
echo $rectangle->getSquarePerimeterSum();

