<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 19.10.2021
 * Time: 16:42
 */
abstract class Cache
{
    abstract public function get(string $key): string;

    abstract public function set(string $key, string $value, int $ttl = 0);

    abstract public function has(string $key): bool;
}