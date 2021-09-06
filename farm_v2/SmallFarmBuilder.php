<?php

class SmallFarmBuilder extends FarmBuilder
{
    public function __construct(string $title) {
        $this->build($title, 3, 8);
    }
}