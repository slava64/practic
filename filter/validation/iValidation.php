<?php

namespace validation;

/**
 * Interface Validation
 */
interface iValidation
{
    public function execute(string $str): bool;
    public function getError(): string;
    public function getName(): string;
}