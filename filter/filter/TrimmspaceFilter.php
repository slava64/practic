<?php

namespace filter;

class TrimmspaceFilter implements Filter
{
    public function execute(string $str): string {
        return trim($str);
    }

}