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
class ParserManager
{
    private $parserList;
    private $loader;

    public function getParserList()
    {
        return $this->parserList;
    }

    public function run()
    {
        /** @var $parser AbstractParser */
        foreach ($this->parserList as $parser) {
            $this->runOne($parser);
        }
    }

    public function runOne(AbstractParser $parser)
    {
        if($parser instanceof ParserEmpty) {
            return;
        }
        $sourceUrlList = $parser->getSourceUrlList();
        $this->runSourceUrlList($sourceUrlList, $parser);
    }

    private function runSourceUrlList(array $sourceUrlList, AbstractParser $parser)
    {
        foreach ($sourceUrlList as $sourceUrl) {
            $newsListPage = $this->loader->run($sourceUrl);
            $objectUrlList = $parser->getObjectUrlList($newsListPage);

            $this->runObjectUrlList($objectUrlList, $parser);
        }
    }

    private function runObjectUrlList(array $objectUrlList, AbstractParser $parser)
    {
        foreach ($objectUrlList as $objectUrl) {
            $newsPage = $this->loader->run($objectUrl);
            $newsObject = $parser->run($newsPage);
        }
    }

    public function addParserString(string $parserName)
    {
        switch ($parserName)
        {
            case 'parser1':
                $this->parserList[] = new Parser1();
                break;
            case 'parser2':
                $this->parserList[] = new Parser2();
                break;
            case 'parser3':
                $this->parserList[] = new Parser3();
                break;
            default:
                $this->parserList[] = new ParserEmpty();
                break;
        }
    }

    public function addParser(AbstractParser $parser)
    {
        $this->parserList[] = $parser;
    }

    public function addLoader(LoaderAdapter $loaderAdapter)
    {
        $this->loader = $loaderAdapter;
    }
}