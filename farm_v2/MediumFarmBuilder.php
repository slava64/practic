<?php

class MediumFarmBuilder extends FarmBuilder
{
    public function buildAnimalList() {
        $egg = new Product("Яйца", new Unit('шт', Unit::INTEGER));
        $meat = new Product("Мясо", new Unit('кг', Unit::FLOAT));

        $perfomanceEgg = new ProductPerfomance($egg, "1", "100");
        $perfomanceMeat = new ProductPerfomance($meat, "1", "100");

        $factory = new HenFactory();
        $animalList = $factory->createAnimalList([
            $perfomanceEgg,
            $perfomanceMeat,
        ], rand(20, 100));

        $this->getFarm()->addAnimalList($animalList);

        $factory = new CowFactory();
        $animalList = $factory->createAnimalList([
            $perfomanceMeat,
        ], rand(1, 10));

        $this->getFarm()->addAnimalList($animalList);
    }
    public function buildHouseList() {
        $factory = new StoneFactory();
        $houseList = $factory->createHouseList(rand(1, 3));
        $this->getFarm()->addHouseList($houseList);

        $factory = new WoodenFactory();
        $houseList = $factory->createHouseList(rand(1, 10));
        $this->getFarm()->addHouseList($houseList);
    }
    public function buildInventoryList() {
        $factory = new HarvesterFactory();
        $inventoryList = $factory->createInventoryList(1);
        $this->getFarm()->addInventoryList($inventoryList);

        $factory = new TractorFactory();
        $inventoryList = $factory->createInventoryList(rand(1, 4));
        $this->getFarm()->addInventoryList($inventoryList);

        $factory = new MilkingMachineFactory();
        $inventoryList = $factory->createInventoryList(rand(1, 15));
        $this->getFarm()->addInventoryList($inventoryList);
    }
    public function buildFieldList() {
        $factory = new PotatoFactory();
        $fieldList = $factory->createFieldList(rand(2, 3));
        $this->getFarm()->addFieldList($fieldList);

        $factory = new WheatFactory();
        $fieldList = $factory->createFieldList(rand(1, 5));
        $this->getFarm()->addFieldList($fieldList);

        $factory = new CornFactory();
        $fieldList = $factory->createFieldList(rand(1, 2));
        $this->getFarm()->addFieldList($fieldList);
    }
}