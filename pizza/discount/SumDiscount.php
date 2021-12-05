<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 24.11.2021
 * Time: 15:35
 */
namespace pizza\discount;

class SumDiscount extends BaseDiscount
{
    /**
     * @var int
     */
    private $sum;

    /**
     * @var int
     */
    private $percent;

    /**
     * SumDiscount constructor.
     * @param int $sum
     * @param int $percent
     */
    public function __construct($sum, $percent)
    {
        $this->sum = $sum;
        $this->percent = $percent;
    }

    public function calc()
    {
        $basePrice = $this->getPizzaOrder()->getPrice();
        if ($basePrice > $this->sum) {
            $sumPrice = $basePrice / 100 * $this->percent;
            return $sumPrice * floor($basePrice / $this->sum);
        }
        return 0;
    }
}