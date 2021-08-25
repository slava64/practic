<?php

class HenFactory extends AnimalFactory
{
    public function createAnimal(Product $product, int $id)
    {
        return new Hen($product, $id);
    }
}