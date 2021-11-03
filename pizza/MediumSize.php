<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 28.10.2021
 * Time: 15:37
 */
class MediumSize extends Size
{
    public function getName()
    {
        return "Средная";
    }

    public function getRate() {
        return 2;
    }
}