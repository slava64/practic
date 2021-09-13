<?php

abstract class HouseFactory
{
    abstract public function createHouse(int $id);

    public function createHouseList(int $count): array {
        $houseList = [];
        for($i = 0; $i < $count; $i++) {
            $houseList[] = $this->createHouse($i);
        }
        return $houseList;
    }
}