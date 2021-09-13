<?php

class HarvesterFactory extends InventoryFactory
{
    public function createInventory(int $id): Inventory {
        return new Harvester($id);
    }
}