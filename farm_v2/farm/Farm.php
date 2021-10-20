<?php

namespace farm_v2\farm;

use farm_v2\animal\Animal;
use farm_v2\inventory\Inventory;
use farm_v2\house\House;
use farm_v2\field\Field;

class Farm
{

    /**
     *
     * @var array
     */
    protected $animalList = [];

    /**
     *
     * @var array
     */
    protected $houseList = [];

    /**
     *
     * @var array
     */
    protected $inventoryList = [];

    /**
     *
     * @var array
     */
    protected $fieldList = [];

    /**
     *
     * @var string
     */
    protected $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function addAnimal(Animal $animal): void
    {
        $this->animalList[] = $animal;
    }

    public function addAnimalList(array $animalList): void
    {
        foreach ($animalList as $animal) {
            $this->addAnimal($animal);
        }
    }

    public function getAnimalList(): array
    {
        return $this->animalList;
    }

    public function addHouse(House $house): void
    {
        $this->houseList[] = $house;
    }

    public function addHouseList(array $houseList): void
    {
        foreach ($houseList as $house) {
            $this->addHouse($house);
        }
    }

    public function getHouseList(): array
    {
        return $this->houseList;
    }

    public function addInventory(Inventory $inventory): void
    {
        $this->inventoryList[] = $inventory;
    }

    public function addInventoryList(array $inventoryList): void
    {
        foreach ($inventoryList as $inventory) {
            $this->addInventory($inventory);
        }
    }

    public function getInventoryList(): array
    {
        return $this->inventoryList;
    }

    public function addField(Field $field): void
    {
        $this->fieldList[] = $field;
    }

    public function addFieldList(array $fieldList): void
    {
        foreach ($fieldList as $field) {
            $this->addField($field);
        }
    }

    public function getFieldList(): array
    {
        return $this->fieldList;
    }

    public function __toString()
    {
        return $this->title;
    }
}
