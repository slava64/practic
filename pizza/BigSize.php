<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 28.10.2021
 * Time: 15:37
 */
class BigSize extends Size
{
    public function getName()
    {
        return "Большая";
    }

    public function getRate() {
        return 2.7;
    }
}