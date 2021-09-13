<?php

class CowFactory extends AnimalFactory
{
    public function createAnimal(int $id, array $productPerfomanceList): Animal {
        $cow = new Cow($id);
        foreach ($productPerfomanceList as $productPerfomance) {
            $cow->addProductPerfomance($productPerfomance);
        }
        return $cow;
    }
}