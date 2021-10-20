<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 11.10.2021
 * Time: 15:40
 */
class ParserManager
{
    private $parserList;
    private $loader;

    public function run()
    {
        /** @var $parser AbstractParser */
        foreach ($this->parserList as $parser) {
            $sourceUrlList = $parser->getSourceUrlList();
            $this->runSourceUrlList($sourceUrlList, $parser);
        }
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


    public function addParser(AbstractParser $parser)
    {
        $this->parserList[] = $parser;
    }

    public function addLoader(LoaderAdapter $loaderAdapter)
    {
        $this->loader = $loaderAdapter;
    }
}