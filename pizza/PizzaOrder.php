<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 03.11.2021
 * Time: 23:30
 */
class PizzaOrder
{
    /**
     * @var array
     */
    private $pizzaList;

    /**
     * @var \pizza\discount\BaseDiscount
     */
    private $discount;

    public function __construct()
    {
        $this->discount = new \pizza\discount\BaseDiscount();
    }

    public function addPizza(Pizza $pizza)
    {
        $this->pizzaList[] = $pizza;
    }

    public function getPizzaList()
    {
        return $this->pizzaList;
    }

    public function getPrice()
    {
        $price = 0;
        $pizzaList = $this->getPizzaList();
        /** @var Pizza $pizza */
        foreach ($pizzaList as $pizza) {
            $price += $pizza->getPrice();
        }
        return $price;
    }

    public function setDiscount(\pizza\discount\BaseDiscount $discount)
    {
        $this->discount = $discount;
        $this->discount->setPizzaOrder($this);
    }

    public function getDiscount()
    {
        return $this->discount->calc();
    }

    public function getPriceWithDiscount()
    {
        return $this->getPrice() - $this->getDiscount();
    }
}