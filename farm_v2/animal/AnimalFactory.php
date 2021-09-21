<?php

namespace farm_v2\animal;

abstract class AnimalFactory
{
    abstract public function createAnimal(array $productPerfomanceList, int $id);

    public function createAnimalList(array $productPerfomanceList, $count): array {
        $animalList = [];
        for($i = 0; $i < $count; $i++) {
            $animalList[] = $this->createAnimal($productPerfomanceList, $i + 1);
        }
        return $animalList;
    }
}