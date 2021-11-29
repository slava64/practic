<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 24.11.2021
 * Time: 15:37
 */
namespace pizza\discount;

use \PizzaOrder;
use \Pizza;

class BaseDiscount
{
    /**
     * @var PizzaOrder
     */
    private $pizzaOrder;

    public function __construct(PizzaOrder $pizzaOrder)
    {
        $this->pizzaOrder = $pizzaOrder;
    }

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
        $price = 0;
        $pizzaList = $this->getPizzaOrder()->getPizzaList();
        /** @var Pizza $pizza */
        foreach ($pizzaList as $pizza) {
            $price += $pizza->getPrice();
        }
        return $price;
    }
}