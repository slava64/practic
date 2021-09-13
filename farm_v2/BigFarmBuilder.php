<?php

class BigFarm extends FarmBuilder
{
    public function buildHouseList() {
        $factory = new StoneFactory();
        $houseList = $factory->createHouseList(rand(1, 5));
        $this->getFarm()->addHouseList($houseList);

        $factory = new WoodenFactory();
        $houseList = $factory->createHouseList(rand(1, 20));
        $this->getFarm()->addHouseList($houseList);
    }
    public function buildInventoryList() {
        $factory = new HarvesterFactory();
        $inventoryList = $factory->createInventoryList(rand(1, 3));
        $this->getFarm()->addInventoryList($inventoryList);

        $factory = new TractorFactory();
        $inventoryList = $factory->createInventoryList(rand(1, 10));
        $this->getFarm()->addInventoryList($inventoryList);

        $factory = new MilkingMachineFactory();
        $inventoryList = $factory->createInventoryList(rand(1, 30));
        $this->getFarm()->addInventoryList($inventoryList);
    }
    public function buildFieldList() {
        $factory = new PotatoFactory();
        $fieldList = $factory->createFieldList(rand(1, 5));
        $this->getFarm()->addFieldList($fieldList);

        $factory = new WheatFactory();
        $fieldList = $factory->createFieldList(rand(1, 15));
        $this->getFarm()->addFieldList($fieldList);

        $factory = new CornFactory();
        $fieldList = $factory->createFieldList(rand(1, 3));
        $this->getFarm()->addFieldList($fieldList);
    }
}