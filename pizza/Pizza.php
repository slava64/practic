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
    private $itemList;

    public function __construct()
    {
        $this->toppingList = [];
        $this->itemList = [];
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

    public function getItemList(): array
    {
        if(empty($this->itemList)) {
            $this->buildItemList();
        }
        return $this->itemList;
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
        $info = $this->getType()->getInfo() . "\r\n";
        $info .= $this->getSize()->getInfo() . "\r\n";

        $toppingList = $this->getToppingList();
        /** @var Topping $topping */
        foreach ($toppingList as $topping) {
            $info .= $topping->getInfo();
        }
        return $info;
    }

    private function buildItemMainList()
    {
        $item = new PizzaItem();
        $item->setName($this->getType()->getName() . ' - ' . $this->getSize()->getName());
        $price = $this->getBasePrice();
        $item->setPrice($price);
        $item->setCount(1);
        $item->setTotal($price);
        $this->itemList[] = $item;
    }

    private function buildItemToppingList()
    {
        $toppingList = $this->getToppingList();
        /** @var Topping $topping */
        foreach ($toppingList as $topping) {
            $this->buildItemTopping($topping);
        }
    }

    private function buildItemTopping(Topping $topping)
    {
        $item = new PizzaItem();
        $item->setName($topping->getName());
        $item->setPrice($topping->getPrice());
        $item->setCount($topping->getCount());
        $item->setTotal($topping->getPriceAll());
        $this->itemList[] = $item;
    }

    private function buildItemList()
    {
        $this->buildItemMainList();
        $this->buildItemToppingList();
    }

    public function getPrice() {
        $price = 0;
        $toppingList = $this->getToppingList();
        /** @var Topping $topping */
        foreach ($toppingList as $topping) {
            $price += $topping->getPriceAll();
        }

        return $this->getBasePrice() + $price * $this->getSize()->getRate();
    }

    public function getBasePrice()
    {
        return $this->getSize()->getRate() * $this->getType()->getPrice();
    }
}

// Сделать случайный заказ pizzaOrder, со случайным типом и размером, случайным кол-во топпингов
// Кол-во пиццы 1-5
// Кол-во топпингов 1-3

// Сделать несколько генераторов - на семью, на человека, на компанию.

// паттерн composite - какая информация нужна по заказу(из каких пицц он состоит(список), и общая стоимость)