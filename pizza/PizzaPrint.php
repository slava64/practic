<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 04.11.2021
 * Time: 1:36
 */
class PizzaPrint
{
    protected $order;

    public function __construct(PizzaOrder $order)
    {
        $this->order = $order;
    }

    public function printReport()
    {
        $pizzaList = $this->order->getPizzaList();
        /** @var Pizza $pizza */
        foreach ($pizzaList as $pizza) {
            $itemList = $pizza->getItemList();
            /** @var PizzaItem $item */
            foreach ($itemList as $item) {
                echo $this->printItem($item) . "\r\n";
            }
        }
    }

    public function printItem(PizzaItem $item)
    {
        return $item->getName() . ' | ' . $item->getPrice() . ' | ' . $item->getCount() . ' | ' . $item->getTotal();
    }

}