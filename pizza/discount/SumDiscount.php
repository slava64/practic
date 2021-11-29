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
     * @return int
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * @param int $sum
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
    }

    /**
     * @return int
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * @param int $percent
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
    }

    public function calc()
    {
        $basePrice = parent::calc();
        if ($basePrice > $this->getSum()) {
            return $basePrice - $basePrice / 100 * $this->getPercent();
        }
        return $basePrice;
    }
}