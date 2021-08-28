<?php

namespace validation;

/**
 * Class Validation
 * @package validation
 */
class Validation implements iValidation
{
    protected $error = 'error';
    protected $name = 'validation';

    public function execute(string $str): bool {
        return $str;
    }

    public function getError(): string {
        return $this->error;
    }

    public function getName(): string {
        return $this->name;
    }
}