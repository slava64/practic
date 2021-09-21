<?php

namespace farm_v2\farm;

use farm_v2\animal\Product;
use farm_v2\animal\Unit;
use farm_v2\animal\ProductPerfomance;
use farm_v2\animal\HenFactory;
use farm_v2\animal\CowFactory;
use farm_v2\house\StoneFactory;
use farm_v2\house\WoodenFactory;
use farm_v2\inventory\HarvesterFactory;
use farm_v2\inventory\TractorFactory;
use farm_v2\inventory\MilkingMachineFactory;
use farm_v2\field\PotatoFactory;
use farm_v2\field\WheatFactory;
use farm_v2\field\CornFactory;

class SmallFarmBuilder extends FarmBuilder
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
        ], rand(5, 20));

        $this->getFarm()->addAnimalList($animalList);
    }
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