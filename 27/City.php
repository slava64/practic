<?php

class City
{
    public $name;
    public $population;

    public function __construct(string $name, int $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
}