<?php

class Tractor extends Inventory
{
    public function __construct(int $id)
    {
        parent::__construct($id);
        $this->title = "Трактор";
    }

}