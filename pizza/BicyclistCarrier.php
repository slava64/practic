<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 21.11.2021
 * Time: 3:15
 */
class BicyclistCarrier extends Carrier
{
    public function getName(): string
    {
        return 'Велосипедист';
    }

    public function getCount(): int
    {
        return 5;
    }
}