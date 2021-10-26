<?php

/**
 * Created by PhpStorm.
 * User: slava
 * Date: 19.10.2021
 * Time: 16:46
 */
class FileCache extends Cache
{
    public function get(string $key): string
    {
        if (is_file($key)) {
            $content = file_get_contents($key);
            if ($content['ttl'] < time()) {
                return $content['value'];
            } else {
                unlink($key);
            }
        }

        return false;
    }

    public function set(string $key, string $value, int $ttl = 0)
    {
        $time = time() + $ttl;
        file_put_contents($key, serialize(['ttl' => $time, 'value' => $value]));
    }

    public function has(string $key): bool
    {
        // TODO: Implement has() method.
    }

}