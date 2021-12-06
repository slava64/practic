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
     * DiscountIterator constructor.
     * @param array $discountList
     */
    public function __construct(array $discountList)
    {
        $this->discountList = $discountList;
        $this->position = 0;
    }

    public function setDiscountList(array $discountList)
    {
        foreach ($discountList as $discount) {
            $this->addDiscountList($discount);
        }
    }

    public function addDiscountList(BaseDiscount $discount)
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

    public function next(): BaseDiscount
    {
        if($this->position > 0 &&
            $this->discountList[$this->position - 1]->calc() > $this->discountList[$this->position]->calc()
        ) {
            $discount = $this->discountList[$this->position];
            $this->discountList[$this->position] = $this->discountList[$this->position - 1];
            $this->discountList[$this->position - 1] = $discount;
        }
        $discount = $this->discountList[$this->position];
        $this->position++;
        return $discount;
    }
}