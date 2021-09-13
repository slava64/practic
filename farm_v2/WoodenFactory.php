<?php

class WoodenFactory extends HouseFactory
{
    public function createHouse(int $id): House {
        return new Wooden($id);
    }
}