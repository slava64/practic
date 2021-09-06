<?php

class MediumFarmBuilder extends FarmBuilder
{
    public function __construct(string $title) {
        $this->build($title, 10, 25);
    }
}