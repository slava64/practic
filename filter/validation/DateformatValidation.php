<?php

namespace validation;

class DateformatValidation implements Validation
{
    private $error = 'Строка должна в формате дд.мм.гггг';

    private $format = "d.m.Y";

    public function execute(string $str): bool {
        $d = \DateTime::createFromFormat($this->format, $str);
        if($d && $d->format($this->format) == $str) {
            return true;
        }

        return false;
    }

    public function getError(): string {
        return $this->error;
    }
}