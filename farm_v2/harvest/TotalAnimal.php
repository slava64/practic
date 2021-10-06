<?php

namespace farm_v2\harvest;

use farm_v2\animal\Animal;
use farm_v2\animal\Product;

class TotalAnimal
{
    private $data;

    public function add(Animal $animal, Product $product, $amount) {
        $animalName = (string)$animal;
        $productName = $product->getName();
        if(empty($this->data[$animalName][$productName])) {
            $this->data[$animalName][$productName] = 0;
        }
        $this->data[$animalName][$productName] += $amount;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }
}