<?php

abstract class AnimalFactory
{
    abstract public function createAnimal(Product $product, int $id);

    public function createAnimals(Product $product, int $count): array {
        $animals = [];
        for($i = 0; $i < $count; $i++) {
            $animals[] = $this->createAnimal($product, $i + 1);
        }
        return $animals;
    }
}