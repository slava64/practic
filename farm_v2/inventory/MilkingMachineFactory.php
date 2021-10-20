<?php

namespace farm_v2\inventory;

class MilkingMachineFactory extends InventoryFactory
{
    public function createInventory(int $id): Inventory
    {
        return new MilkingMachine($id);
    }
}