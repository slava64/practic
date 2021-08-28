<?php

namespace validation;

class IssetValidation implements Validation
{
    private $error = 'Строка не может быть пустой';

    public function execute(string $str): bool {
        if(!empty($str)) {
            return true;
        }
        return false;
    }

    public function getError(): string
    {
        return $this->error;
    }
}