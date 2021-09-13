<?php

class Harvester extends Inventory
{
    public function __construct(int $id)
    {
        parent::__construct($id);
        $this->title = "Комбайн";
    }

}