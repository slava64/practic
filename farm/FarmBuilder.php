<?php

class FarmBuilder {
    public function build(string $title, int $cowsAmount, int $hensAmount): Farm {
        $farm = new Farm($title);

        //$builderFarm = new BuilderFarmClearpath();
        //$builderFarm->createFarm($title);

        $cowFactory = new CowFactory();
        $cows = $cowFactory->createAnimals(new Product("Молоко", "л."), $cowsAmount);

        $henFactory = new HenFactory();
        $hens = $henFactory->createAnimals(new Product("Яйцо", "шт."), $hensAmount);

        $farm->addAnimals(array_merge($cows, $hens));

        return $farm;
    }
}
