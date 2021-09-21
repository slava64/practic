<?php

namespace farm_v2\house;

class Stone extends House
{
    public function __construct(int $id)
    {
        parent::__construct($id);
        $this->title = "Каменный";
    }

}