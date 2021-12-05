<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 05.12.2021
 * Time: 16:12
 */

namespace pizza\discount;


class DiscountReport
{
    private $discountChain;

    public function __construct(DiscountChain $discountChain)
    {
        $this->discountChain = $discountChain;
    }

    public function init()
    {
        $printArr = [];
        /** @var BaseDiscount $discount */
        foreach ($this->discountChain->getDiscountList() as $discount) {
            $printArr[] = get_class($discount) . ' - ' . $discount->calc();
        }
        return implode("\r\n", $printArr);
    }
}