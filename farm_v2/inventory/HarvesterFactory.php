<?php

namespace farm_v2\inventory;

class HarvesterFactory extends InventoryFactory
{
    public function createInventory(int $id): Inventory {
        return new Harvester($id);
    }
}