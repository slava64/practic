<?php

namespace farm_v2\harvest;

use farm_v2\farm\Farm;
use farm_v2\animal\Animal;
use farm_v2\animal\ProductPerfomance;

class HarvestGatherer {
    /**
     * 
     * @var Farm
     */
    protected $farm;

    /**
     * @var string
     */
    protected $date;

    /**
     * @var array
     */
    protected $harvests;

    public function __construct(Farm $farm) {
        $this->farm = $farm;
        $this->date = date("Y-m-d");
    }

    public function setDate(string $date) {
        $this->date = $date;
    }
    
    public function getHarvest(): Harvest {
        if(!isset($this->harvests[$this->date])) {
            $this->harvests[$this->date] = $this->newHarvest();
        }
        return $this->harvests[$this->date];
    }

    public function newHarvest(): Harvest {
        $harvest = new Harvest($this->farm);

        foreach ($this->farm->getAnimalList() as $animal) {
            /* @var $animal Animal */
            $harvestItem = new HarvestItem($animal);
            /** @var $productPerfomance ProductPerfomance */
            foreach ($animal->getProductPerfomanceList() as $productPerfomance) {
                $harvestProduct = new HarvestProduct($productPerfomance->getProduct(), $productPerfomance->produce());
                $harvestItem->addHarvestProduct($harvestProduct);
            }
            $harvest->addItem($harvestItem);
        }

        return $harvest;
    }
}
