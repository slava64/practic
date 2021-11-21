<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 21.11.2021
 * Time: 3:21
 */
abstract class CarrierChain
{
    /**
     * @var CarrierChain
     */
    private $nextCarrier;

    /**
     * @var Carrier
     */
    private $carrier;

    protected function setCarrier(Carrier $carrier)
    {
        $this->carrier = $carrier;
    }

    public function getCarrier()
    {
        return $this->carrier;
    }

    public function setNextCarrier(CarrierChain $carrierChain): CarrierChain
    {
        $this->nextCarrier = $carrierChain;
        return $carrierChain;
    }

    public function handler(array $pizzaOrder)
    {
        $pizzaOrder = $this->setPizzaOrder($pizzaOrder);
        if ($this->nextCarrier) {
            return $this->nextCarrier->handler($pizzaOrder);
        }
        return null;
    }

    abstract public function setPizzaOrder(array $pizzaOrder);
}