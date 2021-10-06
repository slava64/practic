<?php

namespace farm_v2\harvest;

use farm_v2\animal\Product;

class HarvestProduct {
    /**
     * @var Product
     */
    protected $product;

    /**
     * @var string
     */
    protected $amount;
    
    public function __construct(Product $product, string $amount) {
        $this->product = $product;
        $this->amount = $amount;
    }

    public function getProduct(): Product {
        return $this->product;
    }

    public function getAmount(): string {
        return $this->amount;
    }

    public function __toString()
    {
        return $this->getProduct()->getName().' - '.$this->getAmount().' '.$this->getProduct()->getUnit()->getName().'.';
    }
}
