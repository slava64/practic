<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 21.11.2021
 * Time: 15:12
 */
class PedestrianCarrierChain extends CarrierChain
{
    public function getCount()
    {
        return 3;
    }

    public function handler(array $pizzaOrder)
    {
        if(count($pizzaOrder) <= $this->getCount()) {
            echo "Пешеход " . count($pizzaOrder) . "\r\n";
            exit;
        }
        parent::handler($pizzaOrder);
    }
}