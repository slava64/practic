<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 05.12.2021
 * Time: 17:33
 */

namespace pizza\discount;


class DiscountIterator
{
    /**
     * @var array
     */
    private $discountList;

    /**
     * @var int
     */
    public $position;

    /**
     * @var array
     */
    private $discountCalcList;

    /**
     * DiscountIterator constructor.
     * @param array $discountList
     */
    public function __construct(array $discountList)
    {
        $this->discountList = $discountList;
        $this->discountCalcList = [];
        $this->position = 0;
    }

    public function setDiscountList(array $discountList)
    {
        foreach ($discountList as $discount) {
            $this->addDiscount($discount);
        }
    }

    public function addDiscount(BaseDiscount $discount)
    {
        $this->discountList[] = $discount;
    }

    public function hasNext()
    {
        if($this->position < count($this->discountList)) {
            return true;
        }
        return false;
    }

    public function getDiscountCalcList(): array
    {
        if(empty($this->discountCalcList)) {
            foreach ($this->discountList as $discount) {
                //$this->discountCalcList[] = [$discount->calc(), $discount->name()];usort();
                $this->discountCalcList[][] = $discount->calc();
            }
            rsort($this->discountCalcList);
        }
        return $this->discountCalcList;
    }

    public function next(): float
    {
        $sum = $this->getDiscountCalcList()[$this->position];
        $this->position++;
        return $sum;
    }
}