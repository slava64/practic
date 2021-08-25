<?php

require_once 'User.php';
require_once 'Date.php';

$user = new User('Игорь', 30);

echo $user->name.'<br/>';
echo $user->age.'<br/>';


$date = new Date();
$date->day = 11;
$date->month = 8;
$date->year = 2021;

echo $date->weekDay;