<?php

abstract class User
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    abstract public function increaseRevenue(float $value): void;

    abstract public function decreaseRevenue(float $value): void;
}