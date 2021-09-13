<?php

class Potato extends Field
{
    public function __construct(int $id)
    {
        parent::__construct($id);
        $this->title = "Картофельные";
    }

}