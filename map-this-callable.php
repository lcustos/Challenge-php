<?php
function myArrayMap(callable $callable, array $array){
    $result = array();
    foreach ($array as $value) {
        $result[] = $callable($value);
    }
    return $result;
}