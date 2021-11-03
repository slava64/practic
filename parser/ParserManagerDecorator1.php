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
class ParserManagerDecorator1
{
    private $parserManager;

    public function __construct(ParserManager $parserManager)
    {
        $this->parserManager = $parserManager;
    }

    public function run()
    {
        $parserList = $this->parserManager->getParserList();
        /** @var $parser AbstractParser */
        foreach ($parserList as $index => $parser) {
            echo "Сайт_" . $index . " сообщает: " . $parser->getName();

            $this->parserManager->runOne($parser);
        }
    }
}