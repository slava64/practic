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

    /**
     * @var array
     */
    protected $perfomance;
    
    public function __construct(string $name, array $perfomance = [0, 0], Unit $unit) {
        $this->name = $name;
        $this->unit = $unit;

        $this->setPerfomance($perfomance);
    }

    public function setPerfomance(array $perfomance = [0, 0]) {
        $this->perfomance = $perfomance;
    }

    public function getName() {
        return $this->name;
    }

    public function getUnit() {
        return $this->unit;
    }

    public function produce() {
        if($this->getUnit()->getType() == 1) {
            return $this->f_rand($this->perfomance[0], $this->perfomance[1]);
        } else {
            return random_int($this->perfomance[0], $this->perfomance[1]);
        }
    }

    public function getPerfomance(): string {
        return sprintf(
            "от %u до %u %s",
            $this->perfomance[0],
            $this->perfomance[1],
            $this->getUnit()
        );
    }

    private function f_rand($min = 0, $max = 1, $mul = 100) {
        if ($min > $max) return false;
        return mt_rand($min * $mul, $max * $mul) / $mul;
    }
}
