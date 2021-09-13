<?php

class StoneFactory extends HouseFactory
{
    public function createHouse(int $id): House {
        return new Stone($id);
    }
}