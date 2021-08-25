<?php

require_once 'Post.php';
require_once 'Employee.php';

$post1 = new Post('программист', 25000);
$post2 = new Post('менеджер', 15000);
$post3 = new Post('водитель', 5000);

$employee = new Employee('Вася', 'Тихонов', $post1);

echo $employee->getName();
echo "<br/>";
echo $employee->getSalary();
echo "<br/>";
echo $employee->getPost()->getName();
echo "<br/>";
echo $employee->getPost()->getSalary();
echo "<br/>";