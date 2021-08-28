<?php

spl_autoload_register(function ($class) {
    require_once $class . ".php";
});

use validation\IssetValidation;
use validation\RangeValidation;
use validation\IsnumberValidation;
use validation\DateformatValidation;

$string = new Str("12.12.2008");
$string->addValidation(new IssetValidation())
    //->addValidation(new RangeValidation(10, 18));
    //->addValidation(new IsnumberValidation());
    ->addValidation(new DateformatValidation());

if($string->validation()) {
    echo "Валидация пройдена";
} else {
    foreach ($string->getErrors() as $error) {
        echo $error . "<br/>";
    }
}



