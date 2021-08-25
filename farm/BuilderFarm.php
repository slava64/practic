<?php

abstract class BuilderFarm
{
    protected $farm;

    public function getFarm() {
        return $this->farm;
    }
    public function createFarm(string $title) {
        $this->farm = new Farm($title);
    }

    abstract public function buildAnimal(Animal $animal);
    abstract public function buildAnimals(array $animals);
}