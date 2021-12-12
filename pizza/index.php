<?php

spl_autoload_register(function ($class) {
    require_once $class . ".php";
});

$pizzaOrder = new PizzaOrder();
$pizzaOrderBuilder = new PizzaOrderBuilder($pizzaOrder);
$pizzaOrderBuilder->build();
$pizzaList = $pizzaOrderBuilder->getOrder()->getPizzaList();

/*
$carrierChainList = [new PedestrianCarrierChain(), new DriverCarrierChain(), new BicyclistCarrierChain()];
usort($carrierChainList, function(CarrierChain $carrierChain1, CarrierChain $carrierChain2){
    if ($carrierChain1->getCount() == $carrierChain2->getCount()) {
        return 0;
    }
    return ($carrierChain1->getCount() < $carrierChain2->getCount()) ? -1 : 1;
});
foreach ($carrierChainList as $carrierChain) {
    echo $carrierChain->getCount();
}
exit;*/


$carrier = new PedestrianCarrierChain();
$carrier->setNext(new BicyclistCarrierChain())->setNext(new DriverCarrierChain());
$carrier->handler([1,2,3,4]);
exit;





$discountList = [
    new \pizza\discount\SumDiscount(500, 2),
    new \pizza\discount\SumDiscount(700, 3),
    new \pizza\discount\SumDiscount(1000, 5),
    new \pizza\discount\SumDiscount(850, 4),
];
$discountChain = new \pizza\discount\DiscountChain($pizzaOrderBuilder->getOrder());
$discountChain->setDiscountList($discountList);
echo $discountChain->calc() . "\r\n";

$discountReport = new \pizza\discount\DiscountReport($discountChain);
echo $discountReport->init();
exit;
/*$baseDiscount = new \pizza\discount\SumDiscount(500, 5);
$pizzaOrderBuilder->getOrder()->setDiscount($baseDiscount);
echo $pizzaOrderBuilder->getOrder()->getPrice() . "\r\n";
echo $pizzaOrderBuilder->getOrder()->getPriceWithDiscount();
exit;*/

/** @var Pizza $pizza */
foreach ($pizzaList as $pizza) {
    $itemList = $pizza->getItemList();
    /** @var PizzaItem $item */
    foreach ($itemList as $item) {
        echo $item->getInfo();
    }
    echo "Базовая стоимость: " . $pizza->getBasePrice() . "\r\n";
    echo "Общая стоимость: " . $pizza->getPrice() . "\r\n" . "\r\n";
    //var_dump($pizza->getItemList()) . "\r\n";
}




//echo $pizzaOrderBuilder->getOrder()->getPrice();

// сортировка слиянием
// быстрая сортировка