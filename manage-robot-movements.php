<?php
function manageMovements($string):array{
    $array = array('R'=>'RIGHT', 'L'=>'LEFT', 'B'=>'BACK', 'F'=>'FRONT');
    $array2=[];
    foreach ($string as $s){
        foreach ($array as $a){
            if ($a==$s){
                array_push($array2, $array[$s]);
                }
        }
    }
    return $array2;
}

$tab = "RBRB";

print_r(manageMovements($tab));