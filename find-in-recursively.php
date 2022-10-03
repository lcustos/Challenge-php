<?php
function findIn($key,$array): string | bool
{
    $result = false;
    foreach ($array as $k => $v) {
        if ($k == $key) {
            return $v;
        } elseif (is_array($v)) {
            $result = findIn($key, $v);
        }
    }
    return $result;
}