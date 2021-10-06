<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 05.10.2021
 * Time: 1:36
 */

namespace farm_v2\harvest;


class HarvestProductDecorator
{
    private $harvestProduct;
    private $percent;

    public function __construct(HarvestProduct $harvestProduct, int $percent)
    {
        $this->harvestProduct = $harvestProduct;
        $this->percent = $percent;
    }

    public function getAmount()
    {
        return $this->harvestProduct->getAmount() - ($this->harvestProduct->getAmount() / 100 * $this->percent);
    }
}