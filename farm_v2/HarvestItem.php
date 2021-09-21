<?php

class HarvestItem {
    /**
     * 
     * @var Animal
     */
    protected $animal;

    /**
     * @var array
     */
    protected $harvestProductList;
    
    public function __construct(Animal $animal) {
        $this->animal = $animal;
        $this->harvestProductList = [];
    }

    public function getAnimal(): Animal {
        return $this->animal;
    }

    public function addHarvestProduct(HarvestProduct $product) {
        $this->harvestProductList[] = $product;
    }

    public function getHarvestProductList(): array {
        return $this->harvestProductList;
    }

    public function getHarvestProduct(): string {
        return implode(", ", $this->harvestProductList);
    }


    public function __toString()
    {
        return $this->animal->getTitle().' #'.$this->animal->getId().': '.$this->getHarvestProduct();
    }
}
