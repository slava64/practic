<?php

class SmallFarm extends FarmBuilder
{
    public function buildHouseList() {
        $factory = new WoodenFactory();
        $houseList = $factory->createHouseList(rand(1, 3));
        $this->getFarm()->addHouseList($houseList);
    }
    public function buildInventoryList() {
        $factory = new TractorFactory();
        $inventoryList = $factory->createInventoryList(rand(1, 2));
        $this->getFarm()->addInventoryList($inventoryList);
    }
    public function buildFieldList() {
        $factory = new PotatoFactory();
        $fieldList = $factory->createFieldList(1);
        $this->getFarm()->addFieldList($fieldList);

        $factory = new WheatFactory();
        $fieldList = $factory->createFieldList(2);
        $this->getFarm()->addFieldList($fieldList);
    }
}