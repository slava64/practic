<?php

abstract class Figure
{
    abstract public function getSquare();
    abstract public function getPerimeter();

    // Метод для вычисления отношения площади к периметру:
    public function getRatio()
    {
        return $this->getSquare() / $this->getPerimeter();
    }

    public function getSquarePerimeterSum()
    {
        return $this->getSquare() + $this->getPerimeter();
    }
}