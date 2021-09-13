<?php

class Product {
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $unit;
    
    public function __construct(string $name, Unit $unit) {
        $this->name = $name;
        $this->unit = $unit;
    }

    public function setPerfomance(array $perfomance = [0, 0]) {
        $this->perfomance = $perfomance;
    }

    public function getName() {
        return $this->name;
    }

    public function getUnit(): Unit {
        return $this->unit;
    }
}
