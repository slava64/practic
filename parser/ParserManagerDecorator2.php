<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 11.10.2021
 * Time: 15:40
 *
 * Добавить метод создания парсеров из строки используя паттерн приспособленец (ParserManagerFactory)
 *
 */
class ParserManagerDecorator2
{
    private $parserManager;

    public function __construct(ParserManager $parserManager)
    {
        $this->parserManager = $parserManager;
    }

    public function run()
    {
        $this->parserManager->run();
        echo "Текущие дата и время: " . date("Y-m-d H:i:s");
    }
}