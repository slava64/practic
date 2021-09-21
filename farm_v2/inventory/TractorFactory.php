<?php

namespace farm_v2\inventory;

class TractorFactory extends InventoryFactory
{
    public function createInventory(int $id): Inventory {
        return new Tractor($id);
    }
}