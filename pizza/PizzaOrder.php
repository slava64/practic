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

    public function getPrice(\pizza\discount\BaseDiscount $baseDiscount)
    {
        if ($baseDiscount instanceof \pizza\discount\AmountDiscount) {
            $pizzaList = $this->getPizzaList();
            if(count($pizzaList) > 5) {
                $baseDiscount->setCountFree(2);
            } elseif (count($pizzaList) > 3) {
                $baseDiscount->setCountFree(1);
            }
            return $baseDiscount->calc();
        } elseif ($baseDiscount instanceof \pizza\discount\SumDiscount) {
            $discount = new \pizza\discount\BaseDiscount($this);
            $basePrice = $discount->calc();
            if($basePrice > 2000) {
                $baseDiscount->setPercent(20);
            } elseif ($basePrice > 1000) {
                $baseDiscount->setPercent(10);
            }
            return $baseDiscount->calc();
        } else {
            return $baseDiscount->calc();
        }
    }
}