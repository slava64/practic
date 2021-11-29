<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 04.11.2021
 * Time: 1:16
 */
class PizzaOrderBuilder
{
    protected $order;

    public function __construct(PizzaOrder $pizzaOrder)
    {
        $this->order = $pizzaOrder;
    }

    public function getOrder(): PizzaOrder
    {
        return $this->order;
    }

    public function build(): void
    {
        $factory = new PizzaFactory();
        $pizzaList = $factory->createPizzaList(rand(1, 5));

        foreach ($pizzaList as $pizza) {
            $this->order->addPizza($pizza);
        }
    }
}