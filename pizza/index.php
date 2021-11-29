<?php

spl_autoload_register(function ($class) {
    require_once $class . ".php";
});

$pizzaOrder = new PizzaOrder();
$pizzaOrderBuilder = new PizzaOrderBuilder($pizzaOrder);
$pizzaOrderBuilder->build();
$pizzaList = $pizzaOrderBuilder->getOrder()->getPizzaList();

$baseDiscount = new \pizza\discount\AmountDiscount($pizzaOrder);
echo $pizzaOrderBuilder->getOrder()->getPrice($baseDiscount);
exit;

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