<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 28.10.2021
 * Time: 15:41
 */
class Pizza
{
    private $type;
    private $size;
    private $pastry;
    private $toppingList;


    public function __construct()
    {
        $this->toppingList = [];
    }

    public function addType(Type $type) {
        $this->type = $type;
    }

    public function getType(): Type {
        return $this->type;
    }

    public function addSize(Size $size) {
        $this->size = $size;
    }

    public function getSize(): Size {
        return $this->size;
    }

    public function addPastry(Pastry $pastry) {
        $this->pastry = $pastry;
    }

    public function addTopping(Topping $topping) {
        $this->toppingList[] = $topping;
    }

    public function getToppingList() {
        return $this->toppingList;
    }

    public function getInfo() {
        $info = $this->getType()->getInfo() . '\r\n';
        $info .= $this->getSize()->getInfo() . '\r\n';

        $toppingList = $this->getToppingList();
        /** @var Topping $topping */
        foreach ($toppingList as $topping) {
            $info .= $topping->getInfo();
        }
        return $info;
    }

    public function getPrice() {
        $price = $this->getType()->getPrice();

        $toppingList = $this->getToppingList();
        /** @var Topping $topping */
        foreach ($toppingList as $topping) {
            $price += $topping->getPrice();
        }

        return $this->getSize()->getPrice($price);
    }
}