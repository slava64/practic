<?php

namespace validation;

class IsnumberValidation implements Validation
{
    private $error = 'Строка должна быть цифрой';

    public function execute(string $str): bool {
        if(is_numeric($str)) {
            return true;
        }
        return false;
    }

    public function getError(): string
    {
        return $this->error;
    }
}