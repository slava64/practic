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

for ($i = 0; $i < 1; $i++) {
    $harvestGatherer->getHarvest(date("Y-m-d", time() + 60 * 60 * 24 * $i));
    //echo $printer->printReport();
    //echo "\n\n";
}
echo "0 Процентов:\r\n";
echo $harvestGatherer->getHarvestList();

echo "1 Процент:\r\n";
$harvestGatherer->setPercent(3);
echo $harvestGatherer->getHarvestList();

echo "2 Процента:\r\n";
$harvestGatherer->setPercent(4);
echo $harvestGatherer->getHarvestList();

echo "3 Процентов:\r\n";
$harvestGatherer->setPercent(5);
echo $harvestGatherer->getHarvestList();

//var_dump($harvestGatherer->getTotalByProduct());

//$printer = new HarvestPrinter($harvest);

// ввести несколько дат по животным,
// 1. вывести total по отдельным продуктам за период.
// 2. вывести total по отдельному животному за период.

// https://si-dev.com/ru/blog/code-autoformatting
// Используя декоратор/обертку уменьшить кол-во результатов для фермы в поцентах 1, 2, 3




