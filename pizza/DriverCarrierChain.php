<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 21.11.2021
 * Time: 3:32
 */
class DriverCarrierChain extends CarrierChain
{
    public function getCount()
    {
        return 6;
    }

    public function handler(array $pizzaOrder)
    {
        if (count($pizzaOrder) >= $this->getCount()) {
            echo "Водитель: " . count($pizzaOrder) . "\r\n";
            exit;
        }
        parent::handler($pizzaOrder);
    }
}