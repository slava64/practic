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

    public function run() {
    }

    public function addParser(AbstractParser $parser) {
        $this->parserList[] = $parser;
    }

    public function addLoader(LoaderAdapter $loaderAdapter) {
        $this->loader = $loaderAdapter;
    }
}