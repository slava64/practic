<?php

namespace filter;

/**
 * Interface Filter
 */
interface iFilter
{
    public function getName(): string;
    public function execute(string $str): string;
}