<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 21.11.2021
 * Time: 3:12
 */
abstract class Carrier
{
    /**
     * @var array
     */
    protected $orderList;

    public function addOrderList(array $orderList)
    {
        $this->orderList = $orderList;
    }

    public function getOrderList(): array
    {
        return $this->orderList;
    }

    abstract public function getName(): string;
    abstract public function getCount(): int;
}