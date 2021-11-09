<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 04.11.2021
 * Time: 0:15
 */
class PizzaBuilder
{
    protected $pizza;

    public function __construct()
    {
        $this->pizza = new Pizza();
    }

    public function getPizza()
    {
        return $this->pizza;
    }

    public function buildType(): void
    {
        $typeList = [new MeatType(), new PepperoniType(), new CheeseType()];
        shuffle($typeList);

        $this->pizza->addType($typeList[0]);
    }

    public function buildSize(): void
    {
        $sizeList = [new SmallSize(), new MediumSize(), new BigSize()];
        shuffle($sizeList);

        $this->pizza->addSize($sizeList[0]);
    }

    public function buildToppingList(): void
    {
        $toppingList = [new CheeseTopping(), new MushroomTopping(), new SausageTopping()];
        shuffle($toppingList);
        $toppingList = array_slice($toppingList, 0, rand(1, 3));

        /** @var Topping $topping */
        foreach ($toppingList as $topping) {
            $topping->setCount(rand(1, 5));
            $this->pizza->addTopping($topping);
        }
    }

    public function build()
    {
        $this->buildType();
        $this->buildSize();
        $this->buildToppingList();
    }
}