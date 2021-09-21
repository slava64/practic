<?php

spl_autoload_register(function ($class) {
    require_once $class . ".php";
});

$farmBuilder = new SmallFarmBuilder();
$farmBuilder->createNewFarm("Ясный путь");
$farmBuilder->buildAnimalList();

$harvestGatherer = new HarvestGatherer($farmBuilder->getFarm());
$harvest = $harvestGatherer->getHarvest();
$printer = new HarvestPrinter($harvest);

echo $printer->printReport();

