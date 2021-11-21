<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 21.11.2021
 * Time: 3:17
 */
class DriverCarrier extends Carrier
{
    public function getName(): string
    {
        return 'Водитель';
    }

    public function getCount(): int
    {
        return 5;
    }
}