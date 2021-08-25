<?php

require_once 'User.php';
require_once 'Employee.php';
require_once 'City.php';

$arr = [
    new User('Ваня', 'Иванов'),
    new User('Игорь', 'Игоров'),
    new User('Сергей', 'Сергеев'),
    new Employee('Дима', 'Димонов', 10000),
    new Employee('Андрей', 'Павлов', 15000),
    new Employee('Семен', 'Антонов', 11000),
    new City('Москва', 1000000),
    new City('Саратов', 500000),
    new City('Новочеркаск', 150000)
];

foreach ($arr as $item) {
    if($item instanceof User) {
        echo $item->name. "<br/>";
    }
}

echo "<br/><br/>";

foreach ($arr as $item) {
    if(!$item instanceof User) {
        echo $item->name. "<br/>";
    }
}
echo "<br/><br/>";

foreach ($arr as $item) {
    if($item instanceof Employee) {
        echo $item->name. "<br/>";
    }
}
echo "<br/><br/>";

