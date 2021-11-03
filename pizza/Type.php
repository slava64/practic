<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 28.10.2021
 * Time: 15:34
 */
abstract class Type
{
    abstract public function getName();
    abstract public function getPrice();

    public function getInfo()
    {
        return $this->getName() . ' - ' . $this->getPrice() . ' р.';
    }
}