<?php

class Wheat extends Field
{
    public function __construct(int $id)
    {
        parent::__construct($id);
        $this->title = "Пшеничные";
    }

}