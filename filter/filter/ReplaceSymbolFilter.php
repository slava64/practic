<?php

namespace filter;

class ReplaceSymbolFilter implements Filter
{
    public function execute(string $str): string {
        return str_replace("_", "-", $str);
    }

}