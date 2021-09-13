<?php

abstract class FarmBuilder
{
    /**
     * @var Farm
     */
    protected $farm;

    public function getFarm() {
        return $this->farm;
    }
    public function createNewFarm(string $title) {
        $this->farm = new Farm ($title);
    }

    //abstract public function buildAnimalList();
    abstract public function buildHouseList();
    abstract public function buildInventoryList();
    abstract public function buildFieldList();
}
