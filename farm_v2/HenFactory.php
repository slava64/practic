<?php

class HenFactory extends AnimalFactory
{
    public function createAnimal(array $productPerfomanceList, int $id): Animal {
        $hen = new Hen($id);
        foreach ($productPerfomanceList as $productPerfomance) {
            $hen->addProductPerfomance($productPerfomance);
        }
        return $hen;
    }
}