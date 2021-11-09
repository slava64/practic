<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 28.10.2021
 * Time: 15:37
 */
abstract class Size
{
    abstract public function getName();
    abstract public function getRate();

    public function getInfo()
    {
        return 'Размер: ' . $this->getName();
    }
}