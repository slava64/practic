<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 11.10.2021
 * Time: 15:39
 */
abstract class LoaderAdapter
{
    const GET = 'GET';
    const POST = 'POST';

    protected $optionList;

    protected function __construct()
    {
        $this->optionList = [];
        $this->setMethod(self::GET);
    }

    abstract public function run(string $url);

    abstract public function setMethod(string $method = self::GET);

    abstract public function setHeader($header);

    abstract public function setContent(string $content);

    abstract public function setFollowLocation(int $value = 0);

    abstract public function setIgnoreErrors(bool $value);

    abstract public function setTimeout(int $value);

    protected function addOption(string $name, $value) {
        $this->optionList[$name] = $value;
    }

    protected function isGet(string $method) {
        return $method == self::GET;
    }
    protected function isPost(string $method) {
        return $method == self::POST;
    }
}