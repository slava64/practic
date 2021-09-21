<?php

namespace farm_v2\animal;

class CowFactory extends AnimalFactory
{
    public function createAnimal(array $productPerfomanceList, int $id): Animal {
        $cow = new Cow($id);
        foreach ($productPerfomanceList as $productPerfomance) {
            $cow->addProductPerfomance($productPerfomance);
        }
        return $cow;
    }
}