<?php

class City
{
    public $name;
    public $foundation;
    public $population;

    public function __construct(string $name, string $foundation, int $population)
    {
        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }




}