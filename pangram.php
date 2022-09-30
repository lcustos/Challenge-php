<?php
function isPangram(string $str): bool
{
    $str = strtolower($str);
    foreach(range('a', 'z') as $value)
    {
        if(!str_contains($str, $value))
        {
            return false;
        }

    }
    return true;
}