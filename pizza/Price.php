<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 21.11.2021
 * Time: 2:19
 */
class Price
{
    const DISCOUNT_SUM_1 = 1000;
    const PERCENT_1 = 10;

    const DISCOUNT_SUM_2 = 2000;
    const PERCENT_2 = 20;

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
    public function getDiscount1(PizzaOrder $pizzaOrder)
    {
        $pizzaList = $pizzaOrder->getPizzaList();
        $minPrice = 0;
        if (count($pizzaList) > 2) {
            /** @var Pizza $pizza */
            foreach ($pizzaList as $pizza) {
                if($minPrice == 0) {
                    $minPrice = $pizza->getPrice();
                }
                if($pizza->getPrice() < $minPrice) {
                    $minPrice = $pizza->getPrice();
                }
            }
        }
        return $this->getBase($pizzaOrder) - $minPrice;
    }

    // При покупке от 1000 рублей скидка 10%, при покупке от 2000 рублей - 20%
    public function getDiscount2(PizzaOrder $pizzaOrder)
    {
        $basePrice = $this->getBase($pizzaOrder);
        if ($basePrice > self::DISCOUNT_SUM_2) {
            return $basePrice - $basePrice / 100 * self::PERCENT_2;
        } else if ($basePrice > self::DISCOUNT_SUM_1) {
            return $basePrice - $basePrice / 100 * self::PERCENT_1;
        }
        return $basePrice;
    }
}