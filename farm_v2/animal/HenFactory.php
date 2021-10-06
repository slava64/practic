<?php

namespace farm_v2\animal;

class HenFactory extends AnimalFactory
{
    public function createEmptyAnimal()
    {
        return new Hen();
    }

}