<?php
require_once 'Student.php';
require_once 'Employee.php';
require_once 'UsersCollection.php';


$usersCollection = new UsersCollection;

$usersCollection->add(new Student('Петя', 100));
$usersCollection->add(new Student('Ваня', 200));

$usersCollection->add(new Employee('Коля', 300));
$usersCollection->add(new Employee('Вася', 400));

// Получим полную сумму стипендий:
echo $usersCollection->getTotalScholarship(); // выведет 300
echo "<br>";
// Получим полную сумму зарплат:
echo $usersCollection->getTotalSalary(); // выведет 700
echo "<br>";
// Получим полную сумму платежей:
echo $usersCollection->getTotalPayment(); // выведет 1000
echo "<br>";