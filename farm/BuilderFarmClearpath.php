<?php

class BuilderFarmClearpath extends BuilderFarm
{
    public function buildAnimal(Animal $animal) {
        $this->farm->addAnimal($animal);
    }

    public function buildAnimals(array $animals) {
        foreach ($animals as $animal) {
            $this->farm->addAnimal($animal);
        }
    }
}