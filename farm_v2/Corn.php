<?php

class Corn extends Field
{
    public function __construct(int $id)
    {
        parent::__construct($id);
        $this->title = "Кукурузные";
    }

}