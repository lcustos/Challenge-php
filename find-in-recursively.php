<?php
function findIn($string, $array):string|bool
{
    foreach ($array as $k){
        if($k==$string){
            return 
        }
    }
}


$tab = [
    "name" => "forIn",
    "type" => "function",
    "arguments" => [
        "firstParam" => [
            "paramType" => "string",
            "description" => "the value key to find"
        ],
        "secondParam" => "array"
    ],
    "return" => "string or bool"
];

print findIn('paramType', $tab);