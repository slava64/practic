<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 28.10.2021
 * Time: 15:37
 */
class SmallSize extends Size
{
    public function getName()
    {
        return "Маленькая";
    }

    public function getRate() {
        return 1;
    }
}