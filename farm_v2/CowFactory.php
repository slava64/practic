<?php

class CowFactory extends AnimalFactory
{
    public function createAnimal(Product $product, int $id): Animal {
        return new Cow($product, $id);
    }
}