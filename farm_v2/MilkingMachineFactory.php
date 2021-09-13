<?php

class MilkingMachineFactory extends InventoryFactory
{
    public function createInventory(int $id): Inventory {
        return new MilkingMachine($id);
    }
}