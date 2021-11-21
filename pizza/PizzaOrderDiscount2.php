<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 21.11.2021
 * Time: 2:12
 */
class PizzaOrderDiscount2 extends PizzaOrder
{
    public function getPrice(Price $price)
    {
        return $price->getDiscount2($this);
    }
}