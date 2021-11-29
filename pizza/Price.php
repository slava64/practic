<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 21.11.2021
 * Time: 2:19
 */
use pizza\discount\AmountDiscount;
use pizza\discount\BaseDiscount;
use pizza\discount\SumDiscount;

class Price
{
    const DISCOUNT_SUM_1 = 1000;
    const PERCENT_1 = 10;

    const DISCOUNT_SUM_2 = 2000;
    const PERCENT_2 = 20;

    const COUNT_PIZZA_DISCOUNT = 2;

    public function getBase(PizzaOrder $pizzaOrder)
    {
        $price = 0;
        $pizzaList = $pizzaOrder->getPizzaList();
        /** @var Pizza $pizza */
        foreach ($pizzaList as $pizza) {
            $price += $pizza->getPrice();
        }
        return $price;
    }

    // При покупке двух пицц третья (самая дешёвая) бесплатно
    public function getAmountDiscount(PizzaOrder $pizzaOrder)
    {
        $pizzaList = $pizzaOrder->getPizzaList();
        if(count($pizzaList) > 5) {
            $amountDiscount = new AmountDiscount($pizzaOrder);
            $amountDiscount->setCountFree(2);
            return $amountDiscount->calc();
        } elseif (count($pizzaList) > 3) {
            $amountDiscount = new AmountDiscount($pizzaOrder);
            $amountDiscount->setCountFree(1);
            return $amountDiscount->calc();
        }
        $baseDiscount = new BaseDiscount($pizzaOrder);
        return $baseDiscount->calc();
    }

    // При покупке от 1000 рублей скидка 10%, при покупке от 2000 рублей - 20%
    public function getSumDiscount(PizzaOrder $pizzaOrder)
    {
        $baseDiscount = new BaseDiscount($pizzaOrder);
        $basePrice = $baseDiscount->calc();
        if ($basePrice > self::DISCOUNT_SUM_2) {
            return $basePrice - $basePrice / 100 * self::PERCENT_2;
        } else if ($basePrice > self::DISCOUNT_SUM_1) {
            return $basePrice - $basePrice / 100 * self::PERCENT_1;
        }
        return $basePrice;
    }
}