<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 03.11.2021
 * Time: 23:50
 */
class PizzaFactory
{
    public function createPizza()
    {
        $pizza = new PizzaBuilder();
        $pizza->build();

        return $pizza->getPizza();
    }

    public function createPizzaList(int $count)
    {
        $pizzaList = [];
        for($i = 0; $i <= $count; $i++) {
            $pizzaList[] = $this->createPizza();
        }
        return $pizzaList;
    }
}