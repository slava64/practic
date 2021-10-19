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
    const TIME_CACHE = '3600';

    protected $optionList;

    /** @var Cache $cache */
    protected $cache = null;

    public function run(string $url) {
        if(!empty($this->cache)) {
            if(!empty($this->cache->get($url))) {
                return $this->cache->get($url);
            }
        }
        $content = $this->getContent($url);

        if(!empty($this->cache)) {
            $this->cache->set($url, $content, self::TIME_CACHE);
        }
        return $content;
    }

    abstract public function getContent(string $url);

    abstract public function setMethod(string $method = self::GET);

    abstract public function setHeader($header);

    abstract public function setContent(string $content);

    abstract public function setFollowLocation(int $value = 0);

    abstract public function setIgnoreErrors(bool $value);

    abstract public function setTimeout(int $value);

    protected function __construct()
    {
        $this->optionList = [];
        $this->setMethod(self::GET);
    }

    protected function setCache(Cache $cache): void {
        $this->cache = $cache;
    }

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