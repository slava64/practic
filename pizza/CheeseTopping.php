<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 28.10.2021
 * Time: 15:39
 */
class CheeseTopping extends Topping
{
    public function getName()
    {
        return 'Сыр';
    }

    public function getPrice()
    {
        return 10;
    }

    public function getCount()
    {
        return 3;
    }
}