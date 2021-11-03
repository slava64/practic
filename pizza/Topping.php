<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 28.10.2021
 * Time: 15:38
 */
abstract class Topping
{
    abstract public function getName();
    abstract public function getPrice();
    abstract public function getCount();

    public function getPriceAll()
    {
        return $this->getPrice() * $this->getCount();
    }

    public function getInfo()
    {
        return 'Топпинг: ' . $this->getName() . ' - ' . $this->getPrice() . ' р. - ' . $this->getCount() . ' шт.';
    }
}