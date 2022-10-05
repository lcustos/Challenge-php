<?php
function myArrayReduce(array $array, callable $callable, $initial = null)
{
    $result = $initial;
    foreach ($array as $value) {
        $result = $callable($result, $value);
    }
    return $result;
}