<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 28.10.2021
 * Time: 15:39
 */
class BaconTopping extends Topping
{
    public function getName()
    {
        return "Бекон";
    }

    public function getPrice()
    {
        return 30;
    }
}