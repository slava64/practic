<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 05.12.2021
 * Time: 16:09
 */

namespace pizza\discount;


class DiscountChain
{
    /**
     * @var array
     */
    private $discountList;

    /**
     * @var \PizzaOrder
     */
    private $pizzaOrder;

    /**
     * DiscountChain constructor.
     * @param \PizzaOrder $pizzaOrder
     */
    public function __construct(\PizzaOrder $pizzaOrder)
    {
        $this->pizzaOrder = $pizzaOrder;
    }

    /**
     * @return array
     */
    public function getDiscountList()
    {
        return $this->discountList;
    }

    /**
     * @param array $discountList
     */
    public function setDiscountList($discountList)
    {
        foreach ($discountList as $discount) {
            $this->addDiscount($discount);
        }
    }

    /**
     * @param BaseDiscount $discount
     */
    public function addDiscount(BaseDiscount $discount)
    {
        $discount->setPizzaOrder($this->pizzaOrder);
        $this->discountList[] = $discount;
    }

    public function calc()
    {
        $iterator = new DiscountIterator($this->discountList);
        while ($iterator->hasNext()) {
            $discount = $iterator->next();
        }
        return isset($discount) ? $discount->calc() : 0;
    }
}