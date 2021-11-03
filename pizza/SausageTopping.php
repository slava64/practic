<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 28.10.2021
 * Time: 15:40
 */
class SausageTopping extends Topping
{
    public function getName()
    {
        return 'Колбаса';
    }

    public function getPrice()
    {
        return 40;
    }

    public function getCount()
    {
        return 4;
    }
}