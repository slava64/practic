<?php

namespace validation;

/**
 * Interface Validation
 */
interface Validation
{
    public function execute(string $str): bool;
    public function getError(): string;
}