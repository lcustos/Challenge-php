<?php

function reverse($array):array{
    return array_reverse($array);
}

function push($array, ...$string): int{
    return array_push($array,...$string);
}

function sum($array):int{
    return array_sum($array);
}

function arrayContains($array, int|string|float $mix):mixed{
    foreach ($array as $a) {
        if ($a == $mix){
            return true;
        }
    }
    return "Nothing";
}

function merge(array ...$array):array
{
    return array_merge($array);
}

