<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 11.10.2021
 * Time: 15:36
 */
abstract class AbstractParser
{
    protected $urlList;

    abstract public function run(string $page);

    abstract protected function getHost(): string;

    abstract public function getObjectUrlList(string $page);

    abstract public function getSourceUrlList(): array;

}