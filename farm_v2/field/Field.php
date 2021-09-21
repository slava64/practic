<?php

namespace farm_v2\field;

class Field
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