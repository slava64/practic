<?php

class Cow extends Animal {
    public function __construct(int $id) {
        parent::__construct($id);
        $this->title = "Корова";
    }
}
