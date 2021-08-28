<?php

namespace filter;

/**
 * Interface Filter
 */
class Filter implements iFilter
{
    protected $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function execute(string $str): string
    {
        return $str;
    }
}