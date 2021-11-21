<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 21.11.2021
 * Time: 3:13
 */
class PedestrianCarrier extends Carrier
{
    public function getName(): string
    {
        return 'Пешеход';
    }

    public function getCount(): int
    {
        return 3;
    }
}