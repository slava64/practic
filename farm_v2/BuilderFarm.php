<?php

abstract class BuilderFarm
{
    protected $farm;

    // длина забора
    //

    public function getFarm() {
        return $this->farm;
    }
    public function createFarm(string $title) {
        $this->farm = new Farm($title);
    }

    public function addAnimal(Animal $animal) {
        $this->farm->addAnimal($animal);
    }

    public function addAnimals(array $animals) {
        foreach ($animals as $animal) {
            $this->addAnimal($animal);
        }
    }
}