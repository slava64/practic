<?php

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
        return $this->product->getName().' - '.$this->amount.' '.$this->product->getUnit()->getName().'.';
    }
}
