<?php
function capsMe(string $str):string{
    return strtoupper($str);
}

function lowerMe(string $str):string{
    return strtolower($str);
}

function upperCaseFirst(string $str){
    return ucwords(strtolower($str));
}

function lowerCaseFirst(string  $str){
    $str = explode(" ", $str);
    $i = 0;
    while ($i < count($str)) {
        $str[$i] = lcfirst($str[$i]);
        $i++;
    }
    return implode(" ", $str);
}

function removeBlankSpace(string $str): string
{
    return trim($str);
}