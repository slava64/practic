<?php

namespace farm_v2\animal;

class CowFactory extends AnimalFactory
{
    public function createEmptyAnimal()
    {
        return new Cow();
    }
}