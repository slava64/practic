<?php

namespace farm_v2\house;

class StoneFactory extends HouseFactory
{
    public function createHouse(int $id): House {
        return new Stone($id);
    }
}