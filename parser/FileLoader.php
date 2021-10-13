<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 11.10.2021
 * Time: 15:39
 */
class FileLoader extends LoaderAdapter
{
    const GET = 'GET';
    const POST = 'POST';

    private $optionList;

    public function run(string $url) {
        $opts = [];
        foreach ($this->optionList as $key => $value) {
            $opts['http'][$key] = $value;
        }
        $context = stream_context_create($opts);
        $stream = fopen($url, 'r', false, $context);

        var_dump(stream_get_meta_data($stream)); // header
        var_dump(stream_get_contents($stream)); // content
        fclose($stream);
    }

    public function setMethod(string $method = self::GET) {
        if($this->isGet($method)) {
            $this->addOption('method', $method);
        } elseif($this->isPost($method)) {
            $this->addOption('method', $method);
        }
    }

    public function setHeader($header) {
        $this->addOption('header', $header);
    }

    public function setContent(string $content) {
        $this->addOption('content', $content);
    }

    public function setFollowLocation(int $value = 0) {
        $this->addOption('max_redirects', $value);
    }

    public function setIgnoreErrors(bool $value) {
        $this->addOption('ignore_errors', $value);
    }

    public function setTimeout(int $value) {
        $this->addOption('timeout', $value);
    }
}