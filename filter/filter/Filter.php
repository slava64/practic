<?php

namespace filter;

/**
 * Interface Filter
 */
interface Filter
{
    public function execute(string $str): string;
}