<?php

class FarmBuilder {
    protected $cowsAmount;
    protected $hensAmount;

    public function build(string $title): Farm {
        $farm = new Farm($title);

        $cowFactory = new CowFactory();
        $cows = $cowFactory->createAnimals(new Product("Молоко", "л."), $this->cowsAmount);

        $henFactory = new HenFactory();
        $hens = $henFactory->createAnimals(new Product("Яйцо", "шт."), $this->hensAmount);

        $farm->addAnimals(array_merge($cows, $hens));

        return $farm;
    }
}
