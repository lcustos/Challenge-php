<?php
function myArrayMap(callable $callable, array $array, $initial = null){
    $result = $initial;
    foreach ($array as $value) {
        $result[] = $callable($value);
    }
    return $result;
}