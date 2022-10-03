<?php

function joinWords($array, $string=" "){
    $str ="";
    for ($i = 0; $i<count($array);$i++){
        if ($i<count($array)-1){
            $str .= $array[$i] .$string;
        }else{
            $str .=$array[$i];
        }
    }
    return $str;
}

print joinWords(['My', 'name', 'is', 'John']);