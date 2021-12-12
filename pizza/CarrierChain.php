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
    private $next;

    abstract public function getCount();

    public function setNext(CarrierChain $carrierChain): CarrierChain
    {
        $this->next = $carrierChain;
        return $carrierChain;
    }

    public function handler(array $pizzaOrder)
    {
        if ($this->next) {
           $this->next->handler($pizzaOrder);
        }
    }
}