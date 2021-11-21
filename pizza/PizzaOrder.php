<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 03.11.2021
 * Time: 23:30
 */
class PizzaOrder
{
    private $pizzaList;

    public function addPizza(Pizza $pizza)
    {
        $this->pizzaList[] = $pizza;
    }

    public function getPizzaList()
    {
        return $this->pizzaList;
    }

    public function getPrice(Price $price)
    {
        return $price->getBase($this);
    }
}