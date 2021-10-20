<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 19.10.2021
 * Time: 16:45
 */
class DbCache extends Cache
{
    /** @var Mysqli $mysqli */
    public $mysqli;

    public function get(string $key): string
    {
        $query = sprintf("SELECT * FROM cache WHERE key='%s' LIMIT 1",
            $this->mysqli->real_escape_string($key));
        $result = $this->mysqli->query($query);
        if ($row = $result->fetch_assoc()) {
            if ($row['ttl'] < time()) {
                return $row['value'];
            }
        }

        return false;
    }

    public function set(string $key, string $value, int $ttl = 0)
    {
        $query = sprintf("INSERT INTO cache (key, value, ttl) VALUES ('%s', '%s', %d)",
            $this->mysqli->real_escape_string($key), $this->mysqli->real_escape_string($value), intval($ttl));
        $this->mysqli->query($query);
    }

}