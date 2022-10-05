<?php
function myArrayMap(?callable $callable, array $array, array ...$array2):array{
    $result = null;
    if ($callable === null && $array2 != null) {
        $result = array();
        for ($i = 0; $i < count($array); $i++) {
            $result[$i]=[];
            foreach ($array2 as $key) {
//                $result[$i] = $key[$i];
                array_push($result[$i], $key[$i]);
            }
//            $result[$i] = $array[$i];
            array_push($result[$i], $array[$i]);
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

print_r(myArrayMap(null, [1, 3, 7]));