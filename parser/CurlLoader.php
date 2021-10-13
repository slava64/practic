<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 11.10.2021
 * Time: 15:39
 */

//CURLOPT_FOLLOWLOCATION
//CURLOPT_HEADER 	true to include the header in the output.
//CURLOPT_POST
//CURLOPT_RETURNTRANSFER true to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.
//CURLOPT_VERBOSE

class CurlLoader extends LoaderAdapter
{
    public function run(string $url) {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        foreach ($this->optionList as $key => $value) {
            curl_setopt($ch, $key, $value);
        }
        $result = curl_exec($ch);
        curl_close($ch);
        var_dump($result);
    }

    public function setMethod(string $method = self::GET) {
        if($this->isGet($method)) {
            $this->addOption(CURLOPT_HTTPGET, true);
        } elseif($this->isPost($method)) {
            $this->addOption(CURLOPT_POST, true);
        }
    }

    public function setHeader($header) {
        $this->addOption(CURLOPT_HTTPHEADER, $header);
    }

    public function setContent(string $content) {
        $this->addOption(CURLOPT_POSTFIELDS, $content);
    }

    public function setFollowLocation(int $value = 0) {
        $this->addOption(CURLOPT_FOLLOWLOCATION, $value);
    }

    public function setIgnoreErrors(bool $value) {
        $this->addOption('ignore_errors', $value);
    }

    public function setTimeout(int $value) {
        $this->addOption(CURLOPT_TIMEOUT, $value);
    }
}