<?php


require_once 'User.php';
require_once 'Employee.php';
require_once 'Student.php';

$employee = new Employee;
$employee->setName('Коля'); // установим имя
$employee->setSalary(1000); // установим зарплату
$employee->increaseRevenue(100); // увеличим зарплату
$employee->decreaseRevenue(150);

echo $employee->getSalary(); // выведет 1100
