<?php

require_once "Tag.php";

use n59\Tag;

$html = new Tag("html");
echo $html->open();

$head = new Tag("head");
echo $head->open();

$title = new Tag("title");
echo $title->open() . "Загаловок страницы" . $title->close();

echo $head->close();


$body = new Tag("body");
echo $body->open();
echo (new Tag("input"))->setAttr('id', 'first')->setAttr('class', 'first second')->setAttr('disabled', true)->open();
echo (new Tag("input"))->setAttr('name', 'name2')->setAttr('class', 'first second')->open();

echo (new Tag('input'))
    ->addClass('eee')
    ->addClass('bbb')
    ->removeClass('eee') // такой класс уже есть и не добавится
    ->open();

echo $body->close();

echo $html->close();