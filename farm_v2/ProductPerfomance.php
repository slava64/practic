<?php

class ProductPerfomance
{
    private $min;
    private $max;

    /**
     * @var Product
     */
    private $product;

    public function __construct(Product $product, $min, $max)
    {
        $this->product = $product;
        $this->min = $min;
        $this->max = $max;
    }

    public function addProduct(Product $product) {
        $this->product = $product;
    }

    public function getProduct() {
        return $this->product;
    }

    public function produce() {
        if($this->getProduct()->getUnit()->getType() == Unit::INTEGER) {
            return random_int($this->min, $this->max);
        }
        if($this->getProduct()->getUnit()->getType() == Unit::FLOAT) {
            return $this->f_rand($this->min, $this->max);
        }
    }

    private function f_rand($min = 0, $max = 1, $mul = 100) {
        if ($min > $max) return false;
        return mt_rand($min * $mul, $max * $mul) / $mul;
    }

    public function __toString(): string {
        return sprintf(
            "от %u до %u %s",
            $this->min,
            $this->max,
            $this->getProduct()->getUnit()
        );
    }

}