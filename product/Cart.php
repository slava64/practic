<?php

class Cart
{
    private $products = [];

    public function add(Product $product): void {
        $this->products[] = $product;
    }

    public function remove(string $nameProduct): void {
        foreach ($this->products as $index=>$product) {
            if($product->name == $nameProduct) {
                unset($this->products[$index]);
            }
        }
    }

    public function getTotalCost(): float {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum = $sum + $product->price*$product->quantity;
        }

        return $sum;
    }

    public function getTotalQuantity(): int {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum = $sum + $product->quantity;
        }

        return $sum;
    }

    public function getAvgPrice(): float {
        return $this->getTotalCost() / $this->getTotalQuantity();
    }

    public function printAll(): void {
        foreach ($this->products as $product) {
            echo $product . ": " . $product->quantity .  "<br/>";
        }

        echo "<br/>";
    }




}