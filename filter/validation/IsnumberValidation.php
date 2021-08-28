<?php

namespace validation;

class IsnumberValidation extends Validation
{
    protected $error = 'Строка должна быть цифрой';
    protected $name = 'is_number';

    public function execute(string $str): bool {
        if(is_numeric($str)) {
            return true;
        }
        return false;
    }
}