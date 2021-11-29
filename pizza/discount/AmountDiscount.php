<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 24.11.2021
 * Time: 15:36
 */
namespace pizza\discount;

class AmountDiscount extends BaseDiscount
{
    /**
     * @var int
     */
    private $countFree;

    /**
     * @return int
     */
    public function getCountFree()
    {
        return $this->countFree;
    }

    /**
     * @param int $countFree
     */
    public function setCountFree($countFree)
    {
        $this->countFree = $countFree;
    }

    public function calc()
    {
        $pizzaList = $this->getPizzaOrder()->getPizzaList();
        $priceArr = [];
        /** @var \Pizza $pizza */
        foreach ($pizzaList as $pizza) {
            $priceArr[] = $pizza->getPrice();
        }
        sort($priceArr);
        $priceArr = array_slice($priceArr, 0, $this->getCountFree());
        $sumPrice = array_sum($priceArr);

        return parent::calc() - $sumPrice;
    }
}