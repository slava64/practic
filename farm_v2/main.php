<?php

spl_autoload_register(function ($class) {
    require_once $class . ".php";
});

use farm_v2\farm\SmallFarmBuilder;
use farm_v2\farm\MediumFarmBuilder;
use farm_v2\farm\BigFarmBuilder;

use farm_v2\harvest\HarvestGatherer;
use farm_v2\harvest\HarvestPrinter;

$farmBuilder = new SmallFarmBuilder();
$farmBuilder->createNewFarm("Ясный путь");
$farmBuilder->buildAnimalList();

$harvestGatherer = new HarvestGatherer($farmBuilder->getFarm());
$harvest = $harvestGatherer->getHarvest();
$printer = new HarvestPrinter($harvest);

echo $printer->printReport();

