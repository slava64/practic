<?php

namespace farm_v2\inventory;

class Inventory
{
    protected $id;
    protected $title;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }
}