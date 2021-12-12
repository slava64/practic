<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 21.11.2021
 * Time: 12:50
 */
class BicyclistCarrierChain extends CarrierChain
{
    public function getCount()
    {
        return 5;
    }

    public function handler(array $pizzaOrder)
    {
        if(count($pizzaOrder) <= $this->getCount()) {
            echo "Велосипедист " . count($pizzaOrder) . "\r\n";
            exit;
        }
        parent::handler($pizzaOrder);
    }
}