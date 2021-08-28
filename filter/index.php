<?php

spl_autoload_register(function ($class) {
    require_once $class . ".php";
});

use filter\ {ReplaceSymbolFilter, RemovespaceFilter, RemovesmileFilter, TrimmspaceFilter};
use validation\ {IssetValidation, RangeValidation, IsnumberValidation, DateformatValidation};

$texts = [
    '  Фильтр1   ',
    'Фильтр_2',
    'Фильтр 3',
    'Фильтр 4     Фильтр 4',
    '12.12.1987',
    '',
    '123566',
];

$string = new Str($texts);
$string->addFilter(new ReplacesymbolFilter)
    ->addFilter(new RemovespaceFilter)
    ->addFilter(new RemovesmileFilter)
    ->addFilter(new TrimmspaceFilter)
    ->addValidation(new DateformatValidation())
    ->addValidation(new IsnumberValidation())
    ->addValidation(new IssetValidation())
    ->addValidation(new RangeValidation(10, 100))
    ->filter();

$string->validation();
$errors = $string->getErrors();

foreach ($texts as $i => $text) {
    echo $string->getText($i). ":<br/>";

    foreach ($errors[$i] as $error) {
        echo " - " . $error . "<br/>";
    }

    echo "<br/>";
}