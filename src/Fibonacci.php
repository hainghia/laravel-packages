<?php
namespace Kukun\Fibonacci;
class Fibonacci
{
    public static function sequence($n): array
    {
        $result = [0, 1];

        for ($i = 2; $i < $n; $i++) {
            $result[$i] = $result[$i - 1] + $result[$i - 2];
        }

        return $result;
    }
}
