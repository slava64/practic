<?php

namespace farm_v2\animal;

abstract class AnimalFactory
{
    /** @var  Animal */
    protected $empty_animal;

    abstract public function createEmptyAnimal();

    public function cloneAnimal() {
        if(empty($this->empty_animal)) {
            $this->empty_animal = $this->createEmptyAnimal();
        }
        return clone $this->empty_animal;
    }

    public function createAnimal(array $productPerfomanceList, int $id): Animal {
        $animal = $this->cloneAnimal();
        $animal->setId($id);

        foreach ($productPerfomanceList as $productPerfomance) {
            $animal->addProductPerfomance($productPerfomance);
        }
        return $animal;
    }

    public function createAnimalList(array $productPerfomanceList, $count): array {
        $animalList = [];
        for($i = 0; $i < $count; $i++) {
            $animalList[] = $this->createAnimal($productPerfomanceList, $i + 1);
        }
        return $animalList;
    }
}