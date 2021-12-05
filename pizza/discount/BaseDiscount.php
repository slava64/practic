<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 24.11.2021
 * Time: 15:37
 */
namespace pizza\discount;

use \PizzaOrder;

class BaseDiscount
{
    /**
     * @var PizzaOrder
     */
    private $pizzaOrder;

    /**
     * @return PizzaOrder
     */
    public function getPizzaOrder()
    {
        return $this->pizzaOrder;
    }

    /**
     * @param PizzaOrder $pizzaOrder
     */
    public function setPizzaOrder($pizzaOrder)
    {
        $this->pizzaOrder = $pizzaOrder;
    }

    public function calc()
    {
        return 0;
    }
}