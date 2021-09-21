<?php

namespace farm_v2\inventory;

class MilkingMachine extends Inventory
{
    public function __construct(int $id)
    {
        parent::__construct($id);
        $this->title = "Доильный аппарат";
    }

}