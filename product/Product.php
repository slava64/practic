<?php

class Product
{
    public $name;
    public $price;
    public $quantity;

    public function __construct(string $name, float $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getQuantity(): int {
        return $this->quantity;
    }

    public function getCost(): float {
        return $this->price * $this->quantity;
    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return $this->name;
    }
}