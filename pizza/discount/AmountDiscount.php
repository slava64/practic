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
     * @var int
     */
    private $countTotal;

    /**
     * AmountDiscount constructor.
     * @param int $countFree
     * @param int $countTotal
     */
    public function __construct($countFree, $countTotal)
    {
        $this->countFree = $countFree;
        $this->countTotal = $countTotal;
    }

    public function calc()
    {
        $pizzaList = $this->getPizzaOrder()->getPizzaList();
        if(count($pizzaList) > $this->countTotal) {
            $priceArr = [];
            /** @var \Pizza $pizza */
            foreach ($pizzaList as $pizza) {
                $priceArr[] = $pizza->getPrice();
            }
            sort($priceArr);
            $priceArr = array_slice($priceArr, 0, $this->countFree);
            $sumPrice = array_sum($priceArr);

            return $sumPrice * floor(count($pizzaList) / $this->countTotal);
        }
        return 0;
    }
}