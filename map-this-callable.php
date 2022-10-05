<?php
function myArrayMap(?callable $callable, array $array, $initial=null):array{
    $result = $initial;
    if ($callable === null) {
        return $array;
    }
    foreach ($array as $value) {
        $result[] = $callable($value);
    }

    return $result;
}