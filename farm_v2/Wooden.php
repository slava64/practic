<?php

class Wooden extends House
{
    public function __construct(int $id)
    {
        parent::__construct($id);
        $this->title = "Деревянный";
    }

}