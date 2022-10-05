<?php
function findMaximumSubarray($array): int | float
{
    $max=0;
    $sum=0;
    for ($i=0;$i<count($array);$i++){
        $sum+=$array[$i];
        if ($sum>$max){
            $max=$sum;
        }
        if ($sum<0){
            $sum=0;
        }
    }
    return $max;
}