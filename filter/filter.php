<?php

spl_autoload_register(function ($class) {
    require_once $class . ".php";
});

use filter\ReplaceSymbolFilter;
use filter\RemovespaceFilter;
use filter\RemovesmileFilter;
use filter\TrimmspaceFilter;

$string = new Str(" Привет      как_дела ");
$string->addFilter(new ReplaceSymbolFilter)
    ->addFilter(new RemovespaceFilter)
    ->addFilter(new RemovesmileFilter)
    ->addFilter(new TrimmspaceFilter)
    ->filter();

echo $string;



