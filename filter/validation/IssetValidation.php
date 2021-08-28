<?php

namespace validation;

class IssetValidation extends Validation
{
    protected $error = 'Строка не может быть пустой';
    protected $name = 'is_set';


    public function execute(string $str): bool {
        if(!empty($str)) {
            return true;
        }
        return false;
    }
}