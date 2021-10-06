<?php

namespace farm_v2\animal;

class Hen extends Animal {
    public function __construct(int $id = 0) {
        parent::__construct($id);
        $this->title = "Курица";
    }
}
