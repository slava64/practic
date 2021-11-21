<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 21.11.2021
 * Time: 15:12
 */
class PedestrianCarrierChain extends CarrierChain
{
    public function setPizzaOrder(array $pizzaOrder)
    {
        $this->setCarrier(new PedestrianCarrier());

        if(count($pizzaOrder) < $this->getCarrier()->getCount()) {
            $this->getCarrier()->addOrderList($pizzaOrder);
        } else {
            $this->getCarrier()->addOrderList(array_slice($pizzaOrder, 0, $this->getCarrier()->getCount()));
            $pizzaOrder = array_slice($pizzaOrder, $this->getCarrier()->getCount() + 1);
        }
        return $pizzaOrder;
    }
}