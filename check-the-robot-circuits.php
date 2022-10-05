<?php
function checkCircuits($int):array{
    $array = array(2=>'Left arm', 3=>'Right arm', 5=>'Motherboard',7=>'Processor',11=>'Zip Defluxer', 13=>'Motor');
    $array2=[];
    if ($int%2==0){
        $array2[]=$array[2];
    }
    if ($int%3==0){
        $array2[]=$array[3];
    }
    if ($int %5==0){
        $array2[]=$array[5];
    }
    if ($int %7==0){
        $array2[]=$array[7];
    }
    if ($int %11==0){
        $array2[]=$array[11];
    }
    if ($int %13==0){
        $array2[]=$array[13];
    }
    return $array2;
}
