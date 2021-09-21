<?php

namespace farm_v2\harvest;

class HarvestPrinter
{
    /**
     *
     * @var Harvest
     */
    private $harvest;

    public function __construct(Harvest $harvest)
    {
        $this->harvest = $harvest;
    }

    public function printReport(): string
    {
        return $this->harvest;
    }
}