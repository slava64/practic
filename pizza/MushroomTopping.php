<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 28.10.2021
 * Time: 15:40
 */
class MushroomTopping extends Topping
{
    public function getName()
    {
        return 'Грибы';
    }

    public function getPrice()
    {
        return 40;
    }
}