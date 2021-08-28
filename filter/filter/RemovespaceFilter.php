<?php

namespace filter;

class RemovespaceFilter implements Filter
{
    public function execute(string $str): string {
        return preg_replace("/\s+/", " ", $str);
    }
}