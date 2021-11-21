<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 21.11.2021
 * Time: 3:32
 */
class DriverCarrierChain extends CarrierChain
{
    public function setPizzaOrder(array $pizzaOrder)
    {
        $this->setCarrier(new DriverCarrier());

        if (count($pizzaOrder) > $this->getCarrier()->getCount()) {
            $this->getCarrier()->addOrderList($pizzaOrder);
            return [];
        } else {
            return $pizzaOrder;
        }
    }
}