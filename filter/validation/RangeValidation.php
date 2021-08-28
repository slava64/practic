<?php

namespace validation;

class RangeValidation extends Validation
{
    protected $error = 'Строка не находится в диапазоне {min} - {max}';
    protected $name = 'range';

    private $min;
    private $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }

    public function execute(string $str): bool {
        $len = mb_strlen($str, 'UTF-8');
        if($len > $this->min && $len < $this->max) {
            return true;
        }

        return false;
    }

    public function getError(): string {
        $error = str_replace("{min}", $this->min, $this->error);
        $error = str_replace("{max}", $this->max, $error);

        return $error;
    }
}