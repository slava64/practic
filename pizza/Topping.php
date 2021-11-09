<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 28.10.2021
 * Time: 15:38
 */
abstract class Topping
{
    protected $count;

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count)
    {
        $this->count = $count;
    }

    abstract public function getName();
    abstract public function getPrice();

    public function getPriceAll()
    {
        return $this->getPrice() * $this->getCount();
    }

    public function getInfo()
    {
        return 'Топпинг: ' . $this->getName() . ' - ' . $this->getPrice() . ' р. - ' . $this->getCount() . ' шт.';
    }
}