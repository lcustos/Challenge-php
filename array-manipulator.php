<?php

function reverse($array):array{
    return array_reverse($array);
}

function push(&$array, ...$string): int{
    array_push($array,...$string);
    $count = 0;
    foreach ($array as $s){
        $count +=1;
    }
    return $count;
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

$tab = [];
push($tab, "first", "second", "five");