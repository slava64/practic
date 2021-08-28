<?php

namespace filter;

class RemovespaceFilter extends Filter
{
    protected $name = 'remove_space';

    public function execute(string $str): string {
        return preg_replace("/\s+/", " ", $str);
    }
}