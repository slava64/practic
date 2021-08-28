<?php

namespace filter;

class TrimmspaceFilter extends Filter
{
    protected $name = 'trimm_space';

    public function execute(string $str): string {
        return trim($str);
    }

}