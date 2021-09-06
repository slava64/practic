<?php

class BigFarmBuilder extends FarmBuilder
{
    public function __construct(string $title) {
        $this->build($title, 30, 100);
    }
}