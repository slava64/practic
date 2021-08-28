<?php

namespace filter;

class ReplacesymbolFilter extends Filter
{
    protected $name = 'replace_symbol';

    public function execute(string $str): string {
        return str_replace("_", "-", $str);
    }

}