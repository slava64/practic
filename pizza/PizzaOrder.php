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

    public function getPrice()
    {
        $price = 0;
        /** @var Pizza $pizza */
        foreach ($this->pizzaList as $pizza) {
            $price += $pizza->getPrice();
        }
        return $price;
    }

    public function getPizzaList()
    {
        return $this->getPizzaList();
    }
}