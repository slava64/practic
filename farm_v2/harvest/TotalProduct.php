<?php

namespace farm_v2\harvest;

use farm_v2\animal\Animal;
use farm_v2\animal\Product;

class TotalProduct
{
    private $data;

    public function add(Product $product, $amount) {
        $productName = $product->getName();
        if(empty($this->data[$productName])) {
            $this->data[$productName] = 0;
        }
        $this->data[$productName] += $amount;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }
}