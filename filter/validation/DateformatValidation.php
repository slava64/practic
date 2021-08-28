<?php

namespace validation;

class DateformatValidation extends Validation
{
    protected $error = 'Строка должна в формате дд.мм.гггг';
    protected $name = 'date_format';

    private $format = "d.m.Y";

    public function execute(string $str): bool {
        $d = \DateTime::createFromFormat($this->format, $str);
        if($d && $d->format($this->format) == $str) {
            return true;
        }

        return false;
    }
}