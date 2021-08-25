<?php

require_once 'Date.php';
require_once 'Interval.php';

use n57\Date;
use n57\Interval;

$date1 = new Date('2025-12-31');
$date2 = new Date('2026-11-28');

$interval = new Interval($date1, $date2);

echo $interval->toDays();   // выведет разницу в днях
echo "<br/>";
echo $interval->toMonths(); // выведет разницу в месяцах
echo "<br/>";
echo $interval->toYears();  // выведет разницу в годах
echo "<br/>";

echo $interval; // массив вида ['years' => '', 'months' => '', 'days' => '']