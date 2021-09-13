<?php

abstract class InventoryFactory
{
    abstract public function createInventory(int $id);

    public function createInventoryList(int $count): array {
        $inventoryList = [];
        for($i = 0; $i < $count; $i++) {
            $inventoryList[] = $this->createInventory($i);
        }
        return $inventoryList;
    }
}