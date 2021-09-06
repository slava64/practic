<?php

class FarmBuilder {
    protected $cowsAmount;
    protected $hensAmount;

    public function build(string $title, $cowsAmount, $hensAmount): Farm {
        $farm = $this->buildEmptyFarm($title);

        $animals = $this->buildAnimals($cowsAmount, $hensAmount);

        $farm->addAnimals($animals);

        return $farm;
    }

    public function buildEmptyFarm(string $title) {
        return new Farm($title);
    }

    public function buildAnimals($cowsAmount, $hensAmount) {
        $cowFactory = new CowFactory();
        $cows = $cowFactory->createAnimals(new Product("Молоко", "л."), $cowsAmount);

        $henFactory = new HenFactory();
        $hens = $henFactory->createAnimals(new Product("Яйцо", "шт."), $hensAmount);

        return array_merge($cows, $hens);
    }
}
