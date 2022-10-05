<?php
function myArrayMap(?callable $callable, array $array, array ...$array2):array{
    $result = null;
    if ($callable === null && $array2 != null) {
        $result = array();
        for ($i = 0; $i < count($array); $i++) {
            $result[$i]=[];
            array_push($result[$i], $array[$i]);
            foreach ($array2 as $key) {
                array_push($result[$i], $key[$i]);
            }
        }
        return $result;
    }elseif ($callable === null){
        return $array;
    }
    foreach ($array as $value) {
        $result[] = $callable($value);
    }

    return $result;
}

print_r(myArrayMap(null, [1, 2, 3], ['one', 'two', 'three'], ['uno', 'dos', 'tres']));