<?php

use n46\Helper;

class Country
{
    private $population;

    use Helper;

    public function __construct($name, $age, $population)
    {
        $this->name = $name;
        $this->age = $age;
        $this->population = $population;
    }

    public function getPopulation() {
        return $this->getPopulation();
    }
}