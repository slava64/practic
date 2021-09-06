<?php

class Unit
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     * 0 - int
     * 1 - float
     */
    private $type;

    public function __construct(string $name, int $type = 0)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function getName() {
        return $this->name;
    }

    public function getType() {
        return $this->type;
    }

    public function __toString()
    {
        return $this->name;
    }
}