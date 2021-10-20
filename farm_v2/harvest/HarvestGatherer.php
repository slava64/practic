<?php

namespace farm_v2\harvest;

use farm_v2\farm\Farm;
use farm_v2\animal\Animal;
use farm_v2\animal\ProductPerfomance;

class HarvestGatherer
{
    /**
     *
     * @var Farm
     */
    protected $farm;

    /**
     * @var array
     */
    protected $harvestList;

    protected $empty_harvest;

    protected $percent;

    public function __construct(Farm $farm)
    {
        $this->farm = $farm;
        $this->percent = 0;
    }

    public function setPercent(int $percent)
    {
        $this->percent = $percent;
    }

    public function getHarvest(string $date = ''): Harvest
    {
        $date = empty($date) ? date("Y-m-d") : $date;

        if (!isset($this->harvestList[$date])) {
            $this->harvestList[$date] = $this->newHarvest();
        }
        return $this->harvestList[$date];
    }

    public function getHarvestList()
    {
        $text = '';
        foreach ($this->harvestList as $date => $harvest) {
            $text .= $date . ': ' . $harvest->getFarm() . "\r\n";
            /* @var $harvestItem HarvestItem */
            foreach ($harvest->getItems() as $harvestItem) {
                $text .= $harvestItem->getAnimal()->getTitle() . ' #' . $harvestItem->getAnimal()->getId() . ': ';
                /* @var $harvestProduct HarvestProduct */
                foreach ($harvestItem->getHarvestProductList() as $harvestProduct) {
                    $harvestProductDecorator = new HarvestProductDecorator($harvestProduct, $this->percent);
                    $text .= $harvestProduct->getProduct()->getName() . ' ' . $harvestProductDecorator->getAmount() . ' ' . $harvestProduct->getProduct()->getUnit() . ', ';
                }
                $text .= "\r\n";
            }
            $text .= "\r\n";
        }
        return $text;
    }

    public function getTotalByAnimal()
    {
        $result = new TotalAnimal();
        /* @var $harvestItem HarvestItem */
        foreach ($this->harvestList as $date => $harvest) {
            foreach ($harvest->getItems() as $harvestItem) {
                /* @var $harvestProduct HarvestProduct */
                foreach ($harvestItem->getHarvestProductList() as $harvestProduct) {
                    $result->add($harvestItem->getAnimal(), $harvestProduct->getProduct(),
                        $harvestProduct->getAmount());
                }
            }
        }
        return $result->getData();
    }

    public function getTotalByProduct()
    {
        $result = new TotalProduct();
        /* @var $harvestItem HarvestItem */
        foreach ($this->harvestList as $date => $harvest) {
            foreach ($harvest->getItems() as $harvestItem) {
                /* @var $harvestProduct HarvestProduct */
                foreach ($harvestItem->getHarvestProductList() as $harvestProduct) {
                    //$animalName = (string)$harvestItem->getAnimal();
                    $result->add($harvestProduct->getProduct(), $harvestProduct->getAmount());
                }
            }
        }
        return $result->getData();
    }

    public function newHarvest(): Harvest
    {
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
