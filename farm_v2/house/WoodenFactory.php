<?php

namespace farm_v2\house;

class WoodenFactory extends HouseFactory
{
    public function createHouse(int $id): House
    {
        return new Wooden($id);
    }
}