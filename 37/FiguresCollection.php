<?php

class FiguresCollection
{
    private $figures = [];

    // Параметром передается объект с фигурой:
    public function addFigure(Figure $figure)
    {
        $this->figures[] = $figure;
    }

    public function getTotalSquare()
    {
        $sum = 0;

        foreach ($this->figures as $figure) {
            $sum = $sum + $figure->getSquare();
        }

        return $sum;
    }

    public function getTotalPerimeter()
    {
        $sum = 0;

        foreach ($this->figures as $figure) {
            $sum = $sum + $figure->getPerimeter();
        }

        return $sum;
    }
}