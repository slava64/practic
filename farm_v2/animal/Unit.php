<?php

namespace farm_v2\animal;

class Unit
{
    const INTEGER = 0;
    const FLOAT = 1;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $type;

    public function __construct(string $name, int $type = 0)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function __toString()
    {
        return $this->name;
    }
}